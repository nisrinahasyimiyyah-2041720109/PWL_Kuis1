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
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
        $this->call(PegawaiSeeder::class);
=======
        $this->call(BarangSeeder::class);
>>>>>>> 637893cf29ef200f7dd404f06435a241b7a3595c
    }
}
