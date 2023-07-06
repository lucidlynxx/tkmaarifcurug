<?php

namespace Database\Seeders;

use App\Models\TentangKami;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
