<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'isi_berita',
        'gambar',
    ];

}
