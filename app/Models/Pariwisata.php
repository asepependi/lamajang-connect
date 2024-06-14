<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    use HasFactory;
    protected $table = 'pariwisata';
    protected $fillable = ['nama','alamat', 'jam_buka', 'deskripsi', 'foto', 'harga'];
}
