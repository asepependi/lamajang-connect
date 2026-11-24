<?php

namespace Database\Factories;

use App\Models\Pariwisata;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pariwisata>
 */
class PariwisataFactory extends Factory
{
    protected $model = Pariwisata::class;

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
            'jam_buka' => fake()->time().' - '.fake()->time(),
            'deskripsi' => fake()->paragraph(),
            'foto' => fake()->imageUrl(),
            'harga' => fake()->randomFloat(2, 10, 1000),
        ];
    }
}
