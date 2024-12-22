<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller {
    public function index() {
        // Data produk dummy (basic array)
        $products = [
            [
                'id' => 1,
                'name' => 'Ikan Hias Koi',
                'price' => 150000,
            ],
            [
                'id' => 2,
                'name' => 'Aquarium Minimalis',
                'price' => 250000,
            ],
            [
                'id' => 3,
                'name' => 'Filter Air Aquarium',
                'price' => 50000,
            ]
        ];

        // Mengirim data produk ke view 'landing_page'
        return view('landing_page', ['products' => $products]);
    }
}
