<?php

namespace Database\Seeders;

use App\Models\Jumat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JumatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jumat::create([
            'slug' => 'pembukaan',
            'waktu' => '08.00 - 08.30',
            'Kegiatan' => 'Pembukaan'
        ]);
        Jumat::create([
            'slug' => 'kegiatan-inti',
            'waktu' => '08.30 - 09.30',
            'Kegiatan' => 'Kegiatan Inti'
        ]);
        Jumat::create([
            'slug' => 'makan-bersama',
            'waktu' => '09.30 - 09.45',
            'Kegiatan' => 'Makan Bersama'
        ]);
        Jumat::create([
            'slug' => 'penutup',
            'waktu' => '09.45 - 10.00',
            'Kegiatan' => 'Penutup'
        ]);
    }
}
