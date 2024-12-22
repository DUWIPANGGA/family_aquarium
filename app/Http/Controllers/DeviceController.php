<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Decimal;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $devices = Device::where('id', Auth::user()->id)->get();
            return response()->json($devices);
    }
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
            'id_device' => 'required|unique:device,id_device',
            'password' => 'required',
            'nama_device' => 'required',
        ]);
        $result = Device::create([
            'id_user' => Auth::user()->id,
            'id_device' => $request->id_device,
            'password' => $request->password,
            'nama_device' => $request->nama_device,
        ]);
        // dd($result);
        if ($result) {
            return redirect()->route('admin.dashboard')->with('success','Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.dashboard')->with('error','Data Gagal Ditambahkan');
        }
    }

    public function show(string $id)
    {
        $device = Device::where('id', Auth::user()->id)->where('id_device', $id)->first();

        if ($device) {
            return response()->json($device);
        } else {
            return response()->json(['error' => 'Device not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
$device = Device::where('id_device', $request->id_device)->where('id', Auth::user()->id)->first();
// dd($device);
        $device->update([
            'id_device'=>$request->id_device,
            'password'=>$request->password,
            'nama_device'=>$request->nama_device
        ]);
        return redirect()->route('admin.call')->with('success', 'device berhasil ter-update!');
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
        $result = Device::find($id);
        $result->delete();
        if ($result) {
            return redirect()->route('admin.monitoring')->with('success','Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.monitoring')->with('error','Data Gagal Dihapus');
        }
    }
}
