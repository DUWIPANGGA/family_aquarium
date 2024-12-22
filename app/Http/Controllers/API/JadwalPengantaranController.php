<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class JadwalPengantaranController extends Controller
{
    public function getJadwalPengantaran()
    {
        // Validasi input parameter
        $validatedData = request()->validate([
            'keyword' => 'nullable|string|max:255',
            'per_page' => 'nullable|integer|min:1|max:100',
            'page' => 'nullable|integer|min:1',
        ]);

        $keyword = $validatedData['keyword'] ?? null;
        $per_page = $validatedData['per_page'] ?? 10;

        $rekap = Delivery::query();

        if ($keyword) {
            $rekap->where('nama_pemesan', 'like', "%$keyword%")->orWhere('nomor_telepon', 'like', "%$keyword%")->orWhere('alamat_rumah', 'like', "%$keyword%")->orWhereHas('product', function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%");
            });
        }

        $rekaps = $rekap->paginate($per_page);

        $data = collect($rekaps->items())->map(function ($s) {
            return [
                'id' => $s->id,
                'nama_pemesan' => $s->nama_pemesan,
                'nomor_telepon' => $s->nomor_telepon,
                'alamat_rumah' => $s->alamat_rumah,
                'jadwal_delivery' => $s->jadwal_delivery,
                'nama_produk' => $s->product ? $s->product->name : null,
            ];
        });
        
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Data Jadwal Pengantaran berhasil diambil',
            'pagination' => [
                'total' => $rekaps->total(),
                'per_page' => $rekaps->perPage(),
                'current_page' => $rekaps->currentPage(),
                'last_page' => $rekaps->lastPage(),
                'from' => $rekaps->firstItem(),
                'to' => $rekaps->lastItem(),
                'page' => $rekaps->currentPage(),
            ],
            'data' => $data,
        ]);
    }
}