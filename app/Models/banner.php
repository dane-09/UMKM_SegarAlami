<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class banner extends Model
{
    use HasFactory;

    protected $table = 'banner';

    public $timestamps = false;

    protected $fillable = [
        'tagline',
        'deskripsi',
        'gambar',
    ];
}
