<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';
    public $timestamps = false;

    protected $fillable = [
        'tanggal_50',
        'judul_50',
        'kategori_50',
        'status_50',
        'artikel_50',
        'gambar_50',
    ];

    //
}
