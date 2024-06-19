<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BudayaSeeder::class,
            PariwisataSeeder::class,
            PenginapanSeeder::class,
            UsersSeeder::class
        ]);
    }
}
