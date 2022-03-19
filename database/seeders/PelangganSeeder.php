<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Septian Yoga',
                'alamat' => 'Malang',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '085467880921'
            ],
            [
                'nama' => 'Ririn Purnamasari',
                'alamat' => 'Batu',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '081435666098'
            ],
            [
                'nama' => 'Muhammad Muhajir',
                'alamat' => 'Jakarta',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '085435675543'
            ],
            [
                'nama' => 'Indah Lestari',
                'alamat' => 'Malang',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '085623009871'
            ],
            [
                'nama' => 'Charles Setiawan',
                'alamat' => 'Surabaya',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '081290871122'
            ],
            [
                'nama' => 'Mahardika Benedict',
                'alamat' => 'Kediri',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '081879578911'
            ],
            [
                'nama' => 'Dika Firmasnyah',
                'alamat' => 'Sidoarjo',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '085672338140'
            ],
            [
                'nama' => 'Marcella Anastasya',
                'alamat' => 'Jakarta',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '082500128922'
            ],
            [
                'nama' => 'Sabella Furi',
                'alamat' => 'Probolinggo',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '089320876632'
            ],
            [
                'nama' => 'Nandita Nur Cahyani',
                'alamat' => 'Lamongan',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '085109234878'
            ],
            [
                'nama' => 'Putri Widya',
                'alamat' => 'Magelang',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '089213873918'
            ],
            [
                'nama' => 'Michel Susanto',
                'alamat' => 'Blitar',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '082988012945'
            ],
            [
                'nama' => 'Ahmad Ferrorizka',
                'alamat' => 'Batu',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '081985421048'
            ],
            [
                'nama' => 'Zakia Muyasaroh',
                'alamat' => 'Pemalang',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '085120984761'
            ],
            [
                'nama' => 'Cantika Fitri Anjani',
                'alamat' => 'Cirebon',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '082312098711'
            ],
            [
                'nama' => 'Angelica Humairoh',
                'alamat' => 'Jakarta',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '089771901283'
            ],
            [
                'nama' => 'Rey Ramadhana',
                'alamat' => 'Sidoarjo',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '081821998056'
            ],
            [
                'nama' => 'Andika Saputra',
                'alamat' => 'Malang',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '085437655918'
            ],
            [
                'nama' => 'Veronika Almira',
                'alamat' => 'Bogor',
                'jenis_kelamin' => 'Perempuan',
                'nomor_telepon' => '085988901865'
            ],
            [
                'nama' => 'Evan Ardiansyah',
                'alamat' => 'Tangerang',
                'jenis_kelamin' => 'Laki-Laki',
                'nomor_telepon' => '082761802388'
            ]
        ];
        DB::table('pelanggans')->insert($data);
    }
}
