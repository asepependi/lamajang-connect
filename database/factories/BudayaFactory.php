<?php

namespace Database\Factories;

use App\Models\Budaya;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Budaya>
 */
class BudayaFactory extends Factory
{
    protected $model = Budaya::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'foto' => fake()->imageUrl(),
            'deskripsi' => fake()->paragraph(),
        ];
    }
}
