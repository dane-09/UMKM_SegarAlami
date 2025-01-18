<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class aboutus extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    public $timestamps = false;

    protected $fillable = [
        'sub_tagline',
        'tagline',
        'deskripsi',
        'gambar',
    ];
}
