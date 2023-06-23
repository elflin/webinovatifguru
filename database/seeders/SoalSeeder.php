<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PERILAKU INOVATIF GURU
        $soal = new Soal();
        $soal->no_item = 'B1';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya menemukan ide-ide baru untuk mengatasi masalah-masalah dalam pembelajaran.';
        $soal->dimensi = 'Idea Generation';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B4';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya menemukan atau memodifikasi metode mengajar maupun alat peraga dalam pembelajaran.';
        $soal->dimensi = 'Idea Generation';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B7';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya menemukan solusi-solusi yang relatif berbeda untuk memecahkan permasalahan pembelajaran.';
        $soal->dimensi = 'Idea Generation';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B2';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya dapat meyakinkan pihak-pihak yang berkepentingan untuk mendukung pengembangan ide-ide inovatif saya dalam pembelajaran.';
        $soal->dimensi = 'Idea Promotion';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B5';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya berhasil mendapat persetujuan dari pihak berwenang untuk mengembangkan ide-ide inovatif dalam pembelajaran.';
        $soal->dimensi = 'Idea Promotion';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B8';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Pimpinan sekolah menjadi antusias terhadap ide-ide inovatif saya.';
        $soal->dimensi = 'Idea Promotion';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B3';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya menerapkan ide-ide inovatif saya dalam kegiatan-kegiatan yang bermanfaat dalam pembelajaran.';
        $soal->dimensi = 'Idea Realization';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B6';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya memperkenalkan ide-ide inovatif saya secara sistematis kepada siswa didik atau orang tuanya.';
        $soal->dimensi = 'Idea Realization';
        $soal->ukuran = 'Sering';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'B9';
        $soal->variabel = 'Perilaku Inovatif Guru';
        $soal->soal = 'Saya mengevaluasi pemanfaatan ide-ide inovatif yang saya terapkan dalam pembelajaran.';
        $soal->dimensi = 'Idea Realization';
        $soal->ukuran = 'Sering';
        $soal->save();

        // INTENSI BERINOVASI
        $soal = new Soal();
        $soal->no_item = 'C1';
        $soal->variabel = 'Intensi Berinovasi';
        $soal->soal = 'Saya ingin menemukan metode-metode pembelajaran yang lebih efektif.';
        $soal->dimensi = 'Intensi Berinovasi';
        $soal->ukuran = 'Setuju';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'C2';
        $soal->variabel = 'Intensi Berinovasi';
        $soal->soal = 'Saya termotivasi untuk mengembangkan ide-ide baru yang konkrit dalam pembelajaran.';
        $soal->dimensi = 'Intensi Berinovasi';
        $soal->ukuran = 'Setuju';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'C3';
        $soal->variabel = 'Intensi Berinovasi';
        $soal->soal = 'Saya ingin menemukan ide-ide baru sebagai solusi terhadap permasalahan-permasalahan dalam pembelajaran.';
        $soal->dimensi = 'Intensi Berinovasi';
        $soal->ukuran = 'Setuju';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'C4';
        $soal->variabel = 'Intensi Berinovasi';
        $soal->soal = 'Saya bersedia untuk mengembangkan kreativitas saya dalam proses pembelajaran di kelas.';
        $soal->dimensi = 'Intensi Berinovasi';
        $soal->ukuran = 'Setuju';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'C5';
        $soal->variabel = 'Intensi Berinovasi';
        $soal->soal = 'Saya berniat mengembangkan metode atau alat peraga yang inovatif dan berdampak positif dalam pembelajaran.';
        $soal->dimensi = 'Intensi Berinovasi';
        $soal->ukuran = 'Setuju';
        $soal->save();

        $soal = new Soal();
        $soal->no_item = 'C6';
        $soal->variabel = 'Intensi Berinovasi';
        $soal->soal = 'Saya senang membagikan dan mendiskusikan ide-ide inovatif dengan pimpinan dan rekan-rekan kerja di sekolah.';
        $soal->dimensi = 'Intensi Berinovasi';
        $soal->ukuran = 'Setuju';
        $soal->save();
    }
}
