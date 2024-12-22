<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Aquariumss; 
use App\Models\WaterQuality;
use Illuminate\Http\Request;

class WaterQualityController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel water_quality
        $water_qualities = WaterQuality::all();
        
        // Kirim data ke view 'admin.water_quality.index'
        return view('admin.water_quality.index', compact('water_qualities'));
    }
    
    public function create()
    {
        $devices = Device::all(); 
        return view('admin.water_quality.create', compact('devices'));
    }    

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
    
        return redirect()->route('admin.water_quality.create')->with('success','Data Berhasil Ditambahkan');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'pH' => 'required|numeric|min:0|max:14', // Validasi pH untuk rentang 0-14
            'turbidity' => 'required|numeric|min:0', // Validasi Kekeruhan minimum 0
        ]);

        $waterQuality = WaterQuality::findOrFail($id);
        $waterQuality->update([
            'pH' => $request->pH,
            'turbidity' => $request->turbidity,
        ]);

        return redirect()->route('admin.water_quality.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function edit($id)
    {
        // Ambil data berdasarkan ID
        $waterQuality = WaterQuality::findOrFail($id);

        // Kirim data ke view edit
        return view('admin.water_quality.edit', compact('waterQuality'));
    }
  
    public function destroy($id)
    {
        $waterQuality = WaterQuality::findOrFail($id);
        $waterQuality->delete();

        return redirect()->route('admin.water_quality.index')->with('success', 'Data berhasil dihapus.');
    }

    public function exportPdf()
    {
        $data = WaterQuality::all();  // Ambil data yang ingin ditampilkan dalam PDF
        $pdf = WaterQuality::loadView('admin.water_quality_pdf', ['data' => $data]);  // Men-load view dengan data
        return $pdf->download('admin.water_quality_report.pdf');  // Mendownload PDF
    }
}