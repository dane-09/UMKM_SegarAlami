<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class service extends Model
{
    use HasFactory;

    protected $table = 'service';

    public $timestamps = false;

    protected $fillable = [
        'tagline',
        'deskripsi',
        'gambar',
        'gambar_deskripsi'
    ];
}
