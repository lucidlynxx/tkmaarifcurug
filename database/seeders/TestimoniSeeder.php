<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimoni::create([
            'slug' => 'wita-purnamasari',
            'nama' => 'Wita Purnamasari',
            'deskripsi' => "Anak saya sekarang menjadi lebih ramah dan tanggap dalam penyesuaian di lingkungannya. TK Ma'arif Curug Recommended deh.."
        ]);

        Testimoni::create([
            'slug' => 'leni-maylani',
            'nama' => 'Leni Maylani',
            'deskripsi' => "Saya rasa type pengajar di TK Ma'arif Curug begitu bagus dan sangat mudah di tiru/dipelajari oleh sang anak"
        ]);

        Testimoni::create([
            'slug' => 'wendy',
            'nama' => 'Wendy',
            'deskripsi' => "TK Ma'arif Curug emang rekomendasi banget"
        ]);

        Testimoni::create([
            'slug' => 'ecbert',
            'nama' => 'Ecbert',
            'deskripsi' => "Fasilitasnya lengkap, maju terus TK Ma'arif Curug"
        ]);
    }
}
