<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = [
        'tagline',
        'deskripsi',
        'gambar',
    ];
}
