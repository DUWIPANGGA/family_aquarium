<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\WaterQuality;  // Import model WaterQuality
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WaterQualityController extends Controller
{
    public function index()
    {
        // Mengambil data dari API menggunakan HTTP Client
        $response = Http::get('http://localhost:8000/api/Aquarium'); 

        // Jika response API berhasil
        if ($response->successful()) {
            // Mengambil data JSON dari API
            $waterQualities = $response->json()['data'];

            // Mengirim data ke view
            return view('admin.water_quality.create', compact('aquariums'));  
        }

        // Jika gagal
        return view('admin.water_quality.create')->with('error', 'Gagal mengambil data');
    }

    public function store(Request $request)
    {
        // Validasi form data
        $validated = $request->validate([
            'aquarium' => 'required|integer|exists:aquariums,id',  // Pastikan id aquarium ada di database
            'ph' => 'required|numeric',
            'turbidity' => 'required|numeric',
        ]);

        // Menyimpan data kualitas air
        $waterQuality = new WaterQuality();  
        $waterQuality->aquarium_id = $request->aquarium; 
        $waterQuality->pH = $request->ph;  
        $waterQuality->turbidity = $request->turbidity;  
        $waterQuality->save();

        return redirect()->route('admin.water_quality.create')->with('success', 'Data kualitas air berhasil disimpan');
    }
    public function show($id)
    {
        // Ambil data berdasarkan ID
        $waterQuality = WaterQuality::findOrFail($id);

        // Kirim data ke view
        return view('admin.water_quality.show', compact('waterQuality'));
    }

}