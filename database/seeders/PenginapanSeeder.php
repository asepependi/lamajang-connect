<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PenginapanSeeder extends Seeder
{
    public function run()
    {
        DB::table('penginapan')->insert([
            [
                'nama' => 'Villa Mutiara Hitam',
                'alamat' => 'Kampung Sirnasari, Pulosari.',
                'jam_masuk_keluar' => '13.00 - 11.00',
                'deskripsi' => 'Wi-Fi gratis, mushola, air panas, ruang serbaguna, dan free extra bed.',
                'foto' => 'villa_mutiara_hitam.jpeg',
                'harga' => 1805000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Villa Eolia Pangalengan',
                'alamat' => 'Margamukti, Pangalengan.',
                'jam_masuk_keluar' => '13.00 - 11.00',
                'deskripsi' => 'Teras/balkon, kolam renang, rooftop, ruang keluarga, dapur lengkap, dan gazebo rooftop.',
                'foto' => 'Villa_eolia.jpeg',
                'harga' => 2700000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Villa Shinta Corner',
                'alamat' => 'Jalan Raya Sukamenak No.21.',
                'jam_masuk_keluar' => '13.00 - 11.00',
                'deskripsi' => 'Kolam renang, panahan, tunggang kuda, dapur, kolam renang anak, dan area piknik.',
                'foto' => 'villa_shinta_corner.jpeg',
                'harga' => 550000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Zhafran Guest House',
                'alamat' => 'Jalan Situ Cileunca, Warnasari',
                'jam_masuk_keluar' => '13.00 - 11.00',
                'deskripsi' => 'TV, shower hangat, Wi-Fi, area parkir, dan pemandangan danau.',
                'foto' => 'zhafran_guest_house.jpeg',
                'harga' => 1500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
