<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

<<<<<<< HEAD
class pesansaran extends Model
{
    use HasFactory;

    protected $table = 'pesan_saran';

=======
class PesanSaran extends Model
{
    use HasFactory;
    protected $table = 'pesan_saran';
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    public $timestamps = false;

    protected $fillable = [
        'nama',
<<<<<<< HEAD
        'subject',
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
        'pesan',
    ];
}
