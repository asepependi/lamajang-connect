<?php

namespace Database\Factories;

use App\Models\Penginapan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Penginapan>
 */
class PenginapanFactory extends Factory
{
    protected $model = Penginapan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'alamat' => fake()->address(),
            'jam_masuk_keluar' => fake()->time().' - '.fake()->time(),
            'deskripsi' => fake()->paragraph(),
            'foto' => fake()->imageUrl(),
            'harga' => fake()->randomFloat(2, 50, 5000),
        ];
    }
}
