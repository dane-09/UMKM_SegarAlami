<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pesansaran extends Model
{
    use HasFactory;

    protected $table = 'pesan_saran';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'subject',
        'pesan',
    ];
}
