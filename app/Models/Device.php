<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;
    protected $table = 'device';
    protected $primaryKey = 'id_device';
    protected $keyType = 'string';
    protected $fillable = [
        'id','id_user','id_device', 'nama_device','password'
    ];

    // Pastikan untuk menambahkan timestamp
    public $timestamps = true;
}
