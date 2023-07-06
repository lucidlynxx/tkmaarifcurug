<?php

namespace Database\Seeders;

use App\Models\Selasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SelasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Selasa::create([
            'slug' => 'pembukaan',
            'waktu' => '08.00 - 08.30',
            'Kegiatan' => 'Pembukaan'
        ]);
        Selasa::create([
            'slug' => 'kegiatan-inti',
            'waktu' => '08.30 - 09.30',
            'Kegiatan' => 'Kegiatan Inti'
        ]);
        Selasa::create([
            'slug' => 'makan-bersama',
            'waktu' => '09.30 - 09.45',
            'Kegiatan' => 'Makan Bersama'
        ]);
        Selasa::create([
            'slug' => 'penutup',
            'waktu' => '09.45 - 10.00',
            'Kegiatan' => 'Penutup'
        ]);
    }
}
