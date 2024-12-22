<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\Product;

class DeliveryScheduleController extends Controller
{
    // Menampilkan semua jadwal pengantaran
    public function index() {
        $delivery_schedules = Delivery::all();
        return view('admin.delivery-schedule.index', compact('delivery_schedules'));
    }

    // Menampilkan form untuk membuat jadwal pengantaran baru
    public function create() {
        $products = Product::all();
        return view('admin.delivery-schedule.create', compact('products'));
    }

    // Menyimpan data jadwal pengantaran baru ke database
    public function store(Request $request) {
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'nomor_telepon' => 'required|string',
            'alamat_rumah' => 'required|string|max:255',
            'jadwal_delivery' => 'required',
            'product_id' => 'required'
        ]);

        Delivery::create($request->all());
        return redirect()->route('admin.delivery-schedules')->with('success', 'Delivery Schedule created successfully.');
    }

    // Menampilkan detail jadwal pengantaran
    public function show($id) {
        $delivery_schedule = Delivery::find($id);
        return view('admin.delivery-schedule.show', compact('delivery_schedule'));
    }

    // Menampilkan form untuk mengedit jadwal pengantaran
    public function edit($id) {
        $products = Product::all();
        $delivery_schedule = Delivery::find($id);
        return view('admin.delivery-schedule.edit', compact(['delivery_schedule', 'products']));
    }

    // Mengupdate data jadwal pengantaran di database
    public function update(Request $request, $id) {
        $delivery_schedule = Delivery::find($id);
        $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'nomor_telepon' => 'required|string',
            'alamat_rumah' => 'required|string|max:255',
            'jadwal_delivery' => 'required',
            'product_id' => 'required'
        ]);

        $delivery_schedule->update($request->all());
        return redirect()->route('admin.delivery-schedules')->with('success', 'Delivery Schedule updated successfully.');
    }

    // Menghapus jadwal pengantaran dari database
    public function destroy($id) {
        $delivery_schedule = Delivery::find($id);
        $delivery_schedule->delete();
        return redirect()->route('admin.delivery-schedules')->with('success', 'Delivery Schedule deleted successfully.');
    }
}