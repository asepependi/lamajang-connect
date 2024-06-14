<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Penginapan;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penginapan>
 */
class PenginapanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Penginapan::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'alamat' => $this->faker->address,
            'jam_masuk_keluar' => $this->faker->time() . ' - ' . $this->faker->time(),
            'deskripsi' => $this->faker->paragraph,
            'foto' => $this->faker->imageUrl(),
            'harga' => $this->faker->randomFloat(2, 50, 5000),
        ];
    }
}
