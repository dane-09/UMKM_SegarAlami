<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentangKami extends Model
{
    use HasFactory;
    protected $table = 'tentangkami';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
