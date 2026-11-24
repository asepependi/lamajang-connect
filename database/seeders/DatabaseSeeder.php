<?php

namespace Database\Seeders;

use App\Models\Budaya;
use App\Models\Pariwisata;
use App\Models\Penginapan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Budaya::factory(10)->create();
        Pariwisata::factory(10)->create();
        Penginapan::factory(10)->create();
    }
}
