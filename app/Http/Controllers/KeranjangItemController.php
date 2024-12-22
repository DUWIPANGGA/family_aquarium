<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class KeranjangItemController extends Controller
{
    public function index()
    {
        // Mengambil semua keranjang item berdasarkan user yang sedang login
        $keranjangItems = KeranjangItem::with('product')
            ->whereHas('keranjang', function ($query) {
                // Mengambil keranjang berdasarkan user_id
                $query->where('user_id', Auth::id());
            })
            ->get();

        return view('keranjang_items.index', compact('keranjang_Items'));
    }

    public function add(Request $request)
    {
        // Logika untuk menambah produk ke dalam keranjang
        $product = Product::findOrFail($request->product_id);

        $keranjangItem = KeranjangItem::where('keranjang_id', $request->keranjang_id)
            ->where('product_id', $product->id)
            ->first();

        if ($keranjangItem) {
            $keranjangItem->quantity += $request->quantity ?? 1;
            $keranjangItem->save();
        } else {
            KeranjangItem::create([
                'keranjang_id' => $request->keranjang_id,
                'product_id' => $product->id,
                'quantity' => $request->quantity ?? 1,
                'price' => $product->price,
            ]);
        }

        return redirect()->route('keranjang_items.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui jumlah produk dalam keranjang
        $keranjangItem = KeranjangItem::findOrFail($id);
        $keranjangItem->quantity = $request->quantity;
        $keranjangItem->save();

        return redirect()->route('keranjang_items.index')->with('success', 'Keranjang berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Logika untuk menghapus produk dari keranjang
        $keranjangItem = KeranjangItem::findOrFail($id);
        $keranjangItem->delete();

        return redirect()->route('keranjang_items.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
