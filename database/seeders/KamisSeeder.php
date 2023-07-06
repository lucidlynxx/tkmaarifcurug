<?php

namespace Database\Seeders;

use App\Models\Kamis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamis::create([
            'slug' => 'pembukaan',
            'waktu' => '08.00 - 08.30',
            'Kegiatan' => 'Pembukaan'
        ]);
        Kamis::create([
            'slug' => 'kegiatan-inti',
            'waktu' => '08.30 - 09.30',
            'Kegiatan' => 'Kegiatan Inti'
        ]);
        Kamis::create([
            'slug' => 'makan-bersama',
            'waktu' => '09.30 - 09.45',
            'Kegiatan' => 'Makan Bersama'
        ]);
        Kamis::create([
            'slug' => 'penutup',
            'waktu' => '09.45 - 10.00',
            'Kegiatan' => 'Penutup'
        ]);
    }
}
