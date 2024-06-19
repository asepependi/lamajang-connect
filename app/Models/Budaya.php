<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;
    protected $table = 'budaya';
    protected $fillable = ['nama', 'foto', 'deskripsi','position'];
}
