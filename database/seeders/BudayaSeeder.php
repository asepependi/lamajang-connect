<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BudayaSeeder extends Seeder
{
    public function run()
    {
        DB::table('budaya')->insert([
            [
                'id' => 1,
                'nama' => 'Cadas Gantung',
                'foto' => 'Cadas_Gantung.jpeg',
                'position' => 'kiri',
                'deskripsi' => 'Cadas Gantung di Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung, adalah salah satu destinasi wisata alam yang menarik. Desa Lamajang, yang terletak di kawasan Pangalengan, terkenal dengan berbagai potensi wisata, termasuk keunikan dan keindahan alamnya yang masih terjaga.
                Cadas Gantung sendiri adalah tebing dengan ketinggian sekitar 20 meter yang populer sebagai lokasi panjat tebing. Tebing ini menawarkan tantangan tersendiri bagi para pecinta olahraga panjat tebing. Selain aktivitas panjat tebing, daerah sekitar Cadas Gantung juga memiliki sumber mata air yang digunakan untuk irigasi sawah-sawah di Desa Lamajang.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'nama' => 'Hutan Larangan',
                'foto' => 'Hutan_Larangan.jpg',
                'position' => 'kanan',
                'deskripsi' => 'setempat karena fungsinya yang lebih dari sekadar area hijau. Terletak di Kecamatan Pangalengan, Kabupaten Bandung, Jawa Barat, hutan ini dikenal sebagai "hutan keramat" atau "hutan larangan" yang telah dijaga kelestariannya selama lebih dari 300 tahun. Masyarakat Desa Lamajang sangat menghormati hutan ini dan mematuhi aturan lokal yang melarang aktivitas yang dapat merusak ekosistem di dalamnya​ ​.
                Hutan Larangan memainkan peran krusial dalam menjaga keseimbangan lingkungan dan ekologi di desa tersebut. Sebagai sumber kehidupan, hutan ini menyediakan berbagai manfaat, termasuk sumber air bersih yang digunakan untuk irigasi lahan pertanian. Masyarakat setempat percaya bahwa menjaga kelestarian hutan adalah kunci untuk kelangsungan hidup mereka, dan mereka melakukan berbagai upaya untuk melindungi dan melestarikan hutan ini​​.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'nama' => 'Makam Keramat',
                'foto' => 'Makam_Keramat.jpeg',
                'position' => 'kiri',
                'deskripsi' => 'Makam keramat di Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung, terletak di kawasan Kampung Adat Cikondang. Makam ini merupakan tempat peristirahatan leluhur yang sangat dihormati oleh masyarakat setempat, termasuk uyut Cikondang dan juru kunci pertama kampung ini. Lokasinya sekitar 300 meter dari Hutan Larangan, yang juga menjadi bagian integral dari kawasan adat ini.
                Pengunjung yang ingin berziarah ke makam keramat harus mematuhi sejumlah aturan tradisional, seperti tidak boleh berkunjung pada hari-hari tertentu (Selasa, Kamis, dan Sabtu) dan memasuki area makam dengan kaki kanan terlebih dahulu, serta bagi wanita yang sedang haid dilarang masuk. Makam ini sering dikunjungi untuk meminta restu atau berdoa, terutama pada saat-saat tertentu dalam kalender adat​.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'nama' => 'Situs Sembah Dalam',
                'foto' => 'Situs_Sembah_Dalem.jpeg',
                'position' => 'kanan',
                'deskripsi' => 'Situs Sembah Dalem di Desa Lamajang, Kecamatan Pangalengan, Kabupaten Bandung, merupakan salah satu objek wisata budaya yang kaya akan nilai sejarah dan spiritual. Tempat ini dikenal sebagai situs yang digunakan untuk berbagai ritual keagamaan dan adat istiadat setempat.
                Situs Sembah Dalem sendiri adalah lokasi yang sering dikunjungi oleh wisatawan yang tertarik pada sejarah dan budaya Sunda. Di sini, pengunjung dapat belajar tentang berbagai ritual dan tradisi lokal yang masih dipraktikkan hingga saat ini. Selain itu, Desa Lamajang juga menawarkan berbagai fasilitas wisata seperti homestay, villa, dan arena outbond, serta berbagai paket atraksi wisata yang mendukung pariwisata berbasis masyarakat.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
