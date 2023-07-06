<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::create([
            'slug' => 'header',
            'namaTk' => "Ma'arif Curug",
            'deskripsi' => 'Membantu anak didik mengembangkan berbagai potensi yang dimiliki untuk siap memasuki pendidikan dasar melalui kegiatan bermain sambil belajar'
        ]);
    }
}
