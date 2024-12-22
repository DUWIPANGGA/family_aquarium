<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // Menampilkan halaman checkout
    public function index(Request $request)
    {
        // Ambil semua data checkout milik user yang sedang login
        $checkouts = Checkout::where('user_id', Auth::id())
            ->with('product') // Memuat data produk terkait
            ->get();

        return view('checkout.index', compact('checkouts'));
    }

    // Menyimpan data checkout
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id', // Pastikan ID produk ada
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($validated['product_id']);

        // Cek ketersediaan stok (opsional)
        if ($product->stock < $validated['quantity']) {
            return redirect()->back()->withErrors(['quantity' => 'Stok tidak mencukupi.']);
        }

        // Hitung total harga
        $total_price = $product->price * $validated['quantity'];

        // Kurangi stok produk
        $product->decrement('stock', $validated['quantity']);

        // Simpan data checkout
        Checkout::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $validated['quantity'],
            'total_price' => $total_price,
        ]);

        return redirect()->route('checkout.index')->with('success', 'Product added to checkout!');
    }

    // Menghapus item checkout
    public function destroy($id)
    {
        $checkout = Checkout::findOrFail($id);

        // Pastikan hanya pemilik data yang bisa menghapus
        if ($checkout->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        // Kembalikan stok produk
        $checkout->product->increment('stock', $checkout->quantity);

        $checkout->delete();

        return redirect()->route('checkout.index')->with('success', 'Checkout item removed!');
    }
    
    
}
