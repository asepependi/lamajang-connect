<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    use HasFactory;
    protected $table = 'penginapan';
    protected $fillable = ['nama', 'alamat', 'jam_masuk_keluar', 'deskripsi', 'foto', 'harga'];

}
