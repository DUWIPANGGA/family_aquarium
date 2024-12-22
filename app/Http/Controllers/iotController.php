<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Mail\notification;
use App\Models\WaterQuality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class iotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data yang akan ditampilkan
        $deviceCount = 120;
        $deviceOn = 85;
        $ph = 7.5;
        $ntu = 1.2;

        // Data untuk grafik
        $chartLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
        $phData = [7.1, 7.4, 7.5, 7.6, 7.2, 7.5];
        $ntuData = [1.0, 1.1, 1.2, 1.0, 1.3, 1.2];

        // Mengirim data ke view
        $devices = Device::where('id_user', '=', Auth::user()->id)->get();
        return view('iot.dashboard', compact('devices'));
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
        $request->validate([
            'aquarium' => 'required|string|max:255', // Validasi Aquarium
            'pH' => 'required|numeric|min:0|max:14', // Validasi pH
            'turbidity' => 'required|numeric|min:0', // Validasi Turbidity
        ]);
         // Ambil nama aquarium berdasarkan ID
         $aquariumss = device::findOrFail([
            $request->aquarium]);

        // Menyimpan data ke dalam database dan mendapatkan objek yang baru dibuat
        $waterQuality = WaterQuality::create([
            'aquarium' => $request->aquarium,
            'pH' => $request->pH,
            'turbidity' => $request->turbidity,
        ]);
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
    public function mail(Request $request)
    {
            $details = [
                'aquarium'=>$request->aquarium,
                'ph' => $request->pH, // Nilai pH
            'turbidity' => $request->turbidity // Nilai kekeruhan dalam NTU
            ];
        
            Mail::to(Auth::user()->email)->send(new notification($details));
        
            return 'Email sent successfully!';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
