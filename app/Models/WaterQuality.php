<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterQuality extends Model
{
    use HasFactory;

    protected $table = 'water_qualities'; // Pastikan tabel ini sesuai dengan yang ada di database

    // Menentukan kolom yang boleh diisi menggunakan mass assignment
    protected $fillable = ['id', 'device', 'pH', 'turbidity'];
    protected $attributes = [
        'pH' => 7.0,
    ];
    
}
