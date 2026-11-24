<?php

namespace App\Models;

use Database\Factories\PariwisataFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    /** @use HasFactory<PariwisataFactory> */
    use HasFactory;

    protected $table = 'pariwisata';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'alamat',
        'jam_buka',
        'deskripsi',
        'foto',
        'harga',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'harga' => 'decimal:2',
        ];
    }
}
