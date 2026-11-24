<?php

namespace App\Models;

use Database\Factories\BudayaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    /** @use HasFactory<BudayaFactory> */
    use HasFactory;

    protected $table = 'budaya';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
    ];
}
