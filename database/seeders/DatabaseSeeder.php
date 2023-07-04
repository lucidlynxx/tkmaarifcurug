<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Guru;
use App\Models\Header;
use App\Models\Rabu;
use App\Models\User;
use App\Models\Jumat;
use App\Models\Kamis;
use App\Models\Sabtu;
use App\Models\Senin;
use App\Models\Selasa;
use App\Models\TentangKami;
use App\Models\Testimoni;
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

        TentangKami::create([
            'slug' => 'visi-misi-fasilitas',
            'visi' => 'Menjadi center of excellence bidang pendidikan dalam mencetak generasi panutan   yang amanah, berwawasan kebangsaan, pancasilais, berbudi pekerti luhur dan mandiri sesuai perkembangan zaman.',
            'misi1' => 'Menciptakan dan menumbuhkan karakter peserta didik yang mandiri dan kreatif melalui pembelajaran yang sesuai dengan 6 aspek perkembangan anak usia dini (nilai agama dan moral, sosial emosional, bahasa, kognitif, fisik-motorik dan seni).',
            'misi2' => 'Menyediakan fasilitas sarana dan prasarana yang aman, memadai, dan kondusif.',
            'misi3' => 'Menyiapkan anak yang sehat dan dapat bekerjasama dalam bersosialisasi dengan lingkungan sekitar',
            'fasilitas1' => 'Mewujudukan suasana belajar yang menyenangkan untuk meningkatkan rasa ingin belajar anak-anak',
            'fasilitas2' => 'Mengajarkan nilai-nilai positif yang bersumber dari nilai agama, moral dan kehidupan bermasyarakat.',
            'fasilitas3' => 'Sebagai media mengekspresikan diri dan kemampuan mengapresiasi keindahan dan harmoni yang terwujud dalam tingkah laku keseharian.',
            'fasilitas4' => 'Pada masa perkembangan anak aktivitas fisik dibutuhkan untuk melatih fungsi dan kemampuan motorik halus, koordinasi mata dan tangan, keseimbangan, dan ritme gerak fisik.',
            'fasilitas5' => 'Dengan membaca dan menulis, seorang anak akan mendapatkan wawasan yang lebih luas. menulis juga memaksa anak untuk menyusun kosa kata, memilih topik, dan berpikir secara sistematis.',
            'fasilitas6' => 'Ajang belajar, di mana anak-anak dapat mempelajari hal-hal baru. Mulai dari meningkatkan keterampilan komunikasi dan sosial.',
        ]);

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

        Rabu::create([
            'slug' => 'pembukaan',
            'waktu' => '08.00 - 08.30',
            'Kegiatan' => 'Pembukaan'
        ]);
        Rabu::create([
            'slug' => 'kegiatan-inti',
            'waktu' => '08.30 - 09.30',
            'Kegiatan' => 'Kegiatan Inti'
        ]);
        Rabu::create([
            'slug' => 'makan-bersama',
            'waktu' => '09.30 - 09.45',
            'Kegiatan' => 'Makan Bersama'
        ]);
        Rabu::create([
            'slug' => 'penutup',
            'waktu' => '09.45 - 10.00',
            'Kegiatan' => 'Penutup'
        ]);

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

        Guru::factory(4)->create();

        Blog::factory(20)->create();

        Header::create([
            'slug' => 'header',
            'namaTk' => "Ma'arif Curug",
            'deskripsi' => 'Membantu anak didik mengembangkan berbagai potensi yang dimiliki untuk siap memasuki pendidikan dasar melalui kegiatan bermain sambil belajar'
        ]);

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
