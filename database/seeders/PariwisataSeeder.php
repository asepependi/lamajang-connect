<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PariwisataSeeder extends Seeder
{
    public function run()
    {
        DB::table('pariwisata')->insert([
            [
                'nama' => 'Rumah Adat Cikondang',
                'alamat' => 'Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung.',
                'jam_buka' => '08.00 - 20.00',
                'deskripsi' => 'Rumah Adat Cikondang di Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung, merupakan rumah adat Sunda yang masih terjaga hingga kini...',
                'foto' => 'Rumah_Adat_Cikondang.jpeg',
                'harga' => 40000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Fajar Alam',
                'alamat' => 'Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung.',
                'jam_buka' => '00.00 - 24.00',
                'deskripsi' => 'Fajar Alam di Desa Lamajang, Pangalengan, Kabupaten Bandung, adalah destinasi wisata yang menawarkan panorama alam indah dan udara sejuk...',
                'foto' => 'Fajar_Alam.jpg',
                'harga' => 20000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Batu Eon',
                'alamat' => 'Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung.',
                'jam_buka' => '08.00 - 18.00',
                'deskripsi' => 'Batu Eon di Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung, adalah sebuah batu besar yang penuh dengan legenda dan sejarah...',
                'foto' => 'Batu_Eon_.jpeg',
                'harga' => 30000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'Embung Cikalong',
                'alamat' => 'Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung.',
                'jam_buka' => '10.00 - 18.00',
                'deskripsi' => 'Embung ini dikelilingi oleh pemandangan alam yang indah dengan latar belakang perbukitan dan hutan yang masih asri...',
                'foto' => 'Embung_Cikalong.jpg',
                'harga' => 20000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
