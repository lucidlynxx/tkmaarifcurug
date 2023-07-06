<?php

namespace Database\Seeders;

use App\Models\Senin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeninSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Senin::create([
            'slug' => 'pembukaan',
            'waktu' => '08.00 - 08.30',
            'Kegiatan' => 'Pembukaan'
        ]);
        Senin::create([
            'slug' => 'kegiatan-inti',
            'waktu' => '08.30 - 09.30',
            'Kegiatan' => 'Kegiatan Inti'
        ]);
        Senin::create([
            'slug' => 'makan-bersama',
            'waktu' => '09.30 - 09.45',
            'Kegiatan' => 'Makan Bersama'
        ]);
        Senin::create([
            'slug' => 'penutup',
            'waktu' => '09.45 - 10.00',
            'Kegiatan' => 'Penutup'
        ]);
    }
}
