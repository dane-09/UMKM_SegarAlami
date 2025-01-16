<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    public $timestamps = false;

    protected $fillable = [
        'lokasi',
        'no',
        'email',
    ];
}
