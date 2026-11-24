<?php

namespace App\Models;

use Database\Factories\PenginapanFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    /** @use HasFactory<PenginapanFactory> */
    use HasFactory;

    protected $table = 'penginapan';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'alamat',
        'jam_masuk_keluar',
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
