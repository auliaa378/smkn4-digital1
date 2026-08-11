<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'kategori',
        'tanggal',
        'gambar',
        'deskripsi',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}