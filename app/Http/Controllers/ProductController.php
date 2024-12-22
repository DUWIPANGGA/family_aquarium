<?php

// App/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    // Menampilkan semua produk
    public function index(Request $request)
    {
        // Periksa apakah ini permintaan untuk halaman admin atau toko
        $view = $request->is('admin/*') ? 'admin.product.index' : 'toko';

        // Ambil semua data produk
        $products = Product::all();

        // Kirim data ke view yang sesuai
        return view($view, compact('products'));
    }


    // Menampilkan form untuk membuat produk baru
    public function create() {
        return view('admin.product.create');
    }

    // Menyimpan data produk baru ke database
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0'
        ]);

        $data = $request->all();
        $data['price'] = str_replace([',', '.'], '', $data['price']); // Menghapus format pemisah ribuan sebelum disimpan

        Product::create($data);
        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    // Menampilkan detail produk
    public function show($id) {
        $product = Product::find($id);
        return view('admin.product.show', compact('product'));
    }

    // Menampilkan form untuk mengedit produk
    public function edit($id) {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    // Mengupdate data produk di database
    public function update(Request $request, $id) {
        $product = Product::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0'
        ]);

        $data = $request->all();
        $data['price'] = str_replace([',', '.'], '', $data['price']); // Menghapus format pemisah ribuan sebelum disimpan

        $product->update($data);
        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }

    // Menghapus produk dari database
    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }
}
