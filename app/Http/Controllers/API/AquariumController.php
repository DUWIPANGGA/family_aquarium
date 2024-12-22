<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Aquariumss; 
use Illuminate\Http\Request;

class AquariumController extends Controller
{
    public function index() 
    {
        $aquariumss = Aquariumss::all();
        return view('admin.water_quality.aquarium', compact('aquariumss'));
    }
    
public function create()
{
    $aquariumss = Aquariumss::all();
    return view('admin.water_quality.create', compact('aquariumss'));
}

public function getAquariums()
{
    // Mengambil semua data aquarium
    $aquariumss = Aquariumss::all();

    // Kembalikan data ke view
    return $aquariumss;
}
}