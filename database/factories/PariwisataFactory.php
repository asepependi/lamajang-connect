<?php

namespace Database\Factories;
use App\Models\Pariwisata;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pariwisata>
 */
class PariwisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Pariwisata::class;


    public function definition(): array
    {
        return [
            'nama' => $this->faker->word,
            'alamat' => $this->faker->address,
            'jam_buka' => $this->faker->time() . ' - ' . $this->faker->time(),
            'deskripsi' => $this->faker->paragraph,
            'foto' => $this->faker->imageUrl(),
            'harga' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }

}
