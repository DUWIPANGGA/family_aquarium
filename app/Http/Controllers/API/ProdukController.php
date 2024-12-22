<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Aquarium; 
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function getAquariumHias()
    {
        // Validasi input parameter
        $validatedData = request()->validate([
            'keyword' => 'nullable|string|max:255',
            'per_page' => 'nullable|integer|min:1|max:100',
            'page' => 'nullable|integer|min:1',
        ]);

        // Ambil nilai dari input
        $keyword = $validatedData['keyword'] ?? null;
        $per_page = $validatedData['per_page'] ?? 10;

        // Query untuk data aquarium hias
        $query = Aquarium::query();

        // Pencarian berdasarkan keyword di nama aquarium
        if ($keyword) {
            $query->where('name', 'like', "%$keyword%");
        }

        // Paginasi hasil query
        $aquariums = $query->paginate($per_page);

        // Mapping data untuk response JSON
        $data = collect($aquariums->items())->map(function ($aquarium) {
            return [
                'id' => $aquarium->id,
                'nama_aquarium' => $aquarium->name,
            ];
        });

        // Mengembalikan response dalam format JSON
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Data Aquarium Hias berhasil diambil',
            'pagination' => [
                'total' => $aquariums->total(),
                'per_page' => $aquariums->perPage(),
                'current_page' => $aquariums->currentPage(),
                'last_page' => $aquariums->lastPage(),
                'from' => $aquariums->firstItem(),
                'to' => $aquariums->lastItem(),
                'page' => $aquariums->currentPage(),
            ],
            'data' => $data,
        ]);
    }
}