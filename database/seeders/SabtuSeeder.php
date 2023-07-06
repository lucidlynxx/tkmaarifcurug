<?php

namespace Database\Seeders;

use App\Models\Sabtu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SabtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sabtu::create([
            'slug' => 'pembukaan',
            'waktu' => '08.00 - 08.30',
            'Kegiatan' => 'Pembukaan'
        ]);
        Sabtu::create([
            'slug' => 'kegiatan-inti',
            'waktu' => '08.30 - 09.30',
            'Kegiatan' => 'Kegiatan Inti'
        ]);
        Sabtu::create([
            'slug' => 'makan-bersama',
            'waktu' => '09.30 - 09.45',
            'Kegiatan' => 'Makan Bersama'
        ]);
        Sabtu::create([
            'slug' => 'penutup',
            'waktu' => '09.45 - 10.00',
            'Kegiatan' => 'Penutup'
        ]);
    }
}
