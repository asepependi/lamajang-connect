<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Budaya;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budaya>
 */
class BudayaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Budaya::class;

    public function definition(): array
    {
        return [
            'nama' => $this->faker->word,
            'foto' => $this->faker->imageUrl(),
            'deskripsi' => $this->faker->paragraph,
        ];
    }
}
