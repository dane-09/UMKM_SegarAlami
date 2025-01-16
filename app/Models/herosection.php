<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class herosection extends Model
{
    use HasFactory;

    protected $table = 'hero_section';

    public $timestamps = false;

    protected $fillable = [
        'tagline',
        'deskripsi',
        'gambar',
    ];
}
