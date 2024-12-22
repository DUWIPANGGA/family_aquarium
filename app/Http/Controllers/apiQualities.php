<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\WaterQuality;
use Illuminate\Http\Request;

class apiQualities extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validasi input dari user
        $request->validate([
            'aquarium' => 'required|string|max:255', // Validasi Aquarium
            'pH' => 'required|numeric|min:0|max:14', // Validasi pH
            'turbidity' => 'required|numeric|min:0', // Validasi Turbidity
        ]);
        // dd($request->aquarium);
        $aquariumss = Device::findOrFail([
            $request->aquarium]);
            
        $waterQuality = WaterQuality::create([
            'device' => $request->aquarium,
            'pH' => $request->pH,
            'turbidity' => $request->turbidity,
        ]);
    
       return response()->json(['success' => 'Data Berhasil Ditambahkan'], 200);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
