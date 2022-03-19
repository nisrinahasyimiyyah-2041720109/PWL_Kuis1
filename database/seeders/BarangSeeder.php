<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
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
                'nama' => 'Apel',
                'kategori' => 'Buah',
                'harga' => 'Rp 20.000',
                'gambar' => 'style/img/apel.jpg'
            ],
            [
                'nama' => 'Jeruk',
                'kategori' => 'Buah',
                'harga' => 'Rp 25.000',
                'gambar' => 'style/img/jeruk.jpg'
            ],
            [
                'nama' => 'Strawberry',
                'kategori' => 'Buah',
                'harga' => 'Rp 45.000',
                'gambar' => 'style/img/strawberry.jpg'
            ],
            [
                'nama' => 'Mangga',
                'kategori' => 'Buah',
                'harga' => 'Rp 30.000',
                'gambar' => 'style/img/mangga.jpg'
            ],
            [
                'nama' => 'Sawi Hijau',
                'kategori' => 'Sayur',
                'harga' => 'Rp 20.000',
                'gambar' => 'style/img/sawi-hijau.jpg'
            ],
            [
                'nama' => 'Sawi Putih',
                'kategori' => 'Sayur',
                'harga' => 'Rp 23.000',
                'gambar' => 'style/img/sawi-putih.jpg'
            ],
            [
                'nama' => 'Brokoli',
                'kategori' => 'Sayur',
                'harga' => 'Rp 35.000',
                'gambar' => 'style/img/brokoli.jpg'
            ],
            [
                'nama' => 'Wortel',
                'kategori' => 'Sayur',
                'harga' => 'Rp 12.000',
                'gambar' => 'style/img/wortel.jpg'
            ],
            [
                'nama' => 'Anggur',
                'kategori' => 'Buah',
                'harga' => 'Rp 50.000',
                'gambar' => 'style/img/anggur.jpg'
            ],
            [
                'nama' => 'Jambu Merah',
                'kategori' => 'Buah',
                'harga' => 'Rp 8.000',
                'gambar' => 'style/img/jambu-merah.jpg'
            ],
            [
                'nama' => 'Kembang Kol',
                'kategori' => 'Sayur',
                'harga' => 'Rp 25.000',
                'gambar' => 'style/img/kembang-kol.jpg'
            ],
            [
                'nama' => 'Buncis',
                'kategori' => 'Sayur',
                'harga' => 'Rp 18.000',
                'gambar' => 'style/img/buncis.jpg'
            ]
        ];
        DB::table('barangs')->insert($data);
    }
}
