<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Budaya;
use App\Models\Penginapan;
use App\Models\Pariwisata;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Budaya::factory(10)->create();
        Pariwisata::factory(10)->create();
        Penginapan::factory(10)->create();

    }
}
