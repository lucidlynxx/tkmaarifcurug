<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        User::create([
            'username' => 'jumpinJackFlash',
            'password' => bcrypt('password'),
            'alamat' => 'Grove street',
            'noTelepon' => '082249486237',
            'jenisKelamin' => 'laki-laki'
        ]);

        User::create([
            'username' => 'Novy Nurlelasari',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. Sesama',
            'noTelepon' => '085699699699',
            'jenisKelamin' => 'perempuan'
        ]);

        User::factory(4)->create();

        $this->call(TentangKamiSeeder::class);
        $this->call(SeninSeeder::class);
        $this->call(SelasaSeeder::class);
        $this->call(RabuSeeder::class);
        $this->call(KamisSeeder::class);
        $this->call(JumatSeeder::class);
        $this->call(SabtuSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(TestimoniSeeder::class);
    }
}
