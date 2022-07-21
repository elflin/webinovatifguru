<?php

namespace Database\Seeders;

use App\Models\pelatihan;
use Illuminate\Database\Seeder;

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $pelatihan = new pelatihan();
        // $pelatihan->judul = 'Perkenalan';
        // $pelatihan->deskripsi = 'Ini adalah test deskripsi dari perkenalan.';
        // // $pelatihan->link = '';
        // // $pelatihan->link_ppt = '';
        // $pelatihan->type = 'Consent';
        // $pelatihan->save();

        // $pelatihan = new pelatihan();
        // $pelatihan->judul = 'Informed Consent';
        // $pelatihan->deskripsi = 'Ini adalah test deskripsi dari informed consent.';
        // $pelatihan->link = 'http://docs.google.com/';
        // // $pelatihan->link_ppt = '';
        // $pelatihan->type = 'Consent';
        // $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pertemuan 1: Pengantar';
        $pelatihan->deskripsi = 'Perilaku inovatif guru dalam pembelajaran yang ditunjukkan dengan menghasilkan ide-ide baru berdasarkan permasalahan pembelajaran yang dijumpai, berupaya meyakinkan pihak-pihak berkepentingan untuk mendukung ide-idenya tersebut, serta menerapkannya.';
        $pelatihan->link = 'https://www.youtube.com/embed/3CCz5DkDQDI';
        $pelatihan->link_ppt = '1658390300-Modul Pelatihan MPIG Pertemuan 1.pdf';
        $pelatihan->type = 'materi';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pertemuan 2: Membangun Sikap & Efikasi Berinovasi';
        $pelatihan->deskripsi = 'Pengalaman dan kebiasaan membuat kita memandang suatu masalah dengan paradigma lama. Jangan biarkan paradigma lama kita membelenggu sikap dan cara pandang kita terhadap permasalahan. Belajar membuka diri dan wawasan sehingga lebih optimis terhadap berbagai alternatif baru dalam penyelesaian masalah.';
        $pelatihan->link = 'https://www.youtube.com/embed/8gYkXa1CdqA';
        $pelatihan->link_ppt = '1658390676-Modul Pelatihan MPIG Pertemuan 2_compressed.pdf';
        $pelatihan->type = 'materi';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pertemuan 3: Memperkuat Intensi Berinovasi';
        $pelatihan->deskripsi = 'Merencanakan tindakan inovasi yang spesifik, dengan target waktu yang terukur dan dianggap bernilai / berharga akan lebih memotivasi diri untuk memperjuangkannya. Mengindentifikasi dan menyadari risiko yang mungkin terjadi dalam berinovasi membuat diri lebih siap untuk memperjuangkan lebih lanjut dan tidak mudah menyerah.';
        $pelatihan->link = 'https://www.youtube.com/embed/wQeou8UaLV4';
        $pelatihan->link_ppt = '1658390733-Modul Pelatihan MPIG Pertemuan 3.pdf';
        $pelatihan->type = 'materi';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pre-test Learning';
        $pelatihan->deskripsi = 'Perilaku inovatif guru dalam pembelajaran yang ditunjukkan dengan menghasilkan ide-ide baru berdasarkan permasalahan pembelajaran yang dijumpai, berupaya meyakinkan pihak-pihak berkepentingan untuk mendukung ide-idenya tersebut, serta menerapkannya.';
        // $pelatihan->link = 'http://docs.google.com/';
        // $pelatihan->link_ppt = '';
        $pelatihan->type = 'tes';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Post-test Learning';
        $pelatihan->deskripsi = 'Perilaku inovatif guru dalam pembelajaran yang ditunjukkan dengan menghasilkan ide-ide baru berdasarkan permasalahan pembelajaran yang dijumpai, berupaya meyakinkan pihak-pihak berkepentingan untuk mendukung ide-idenya tersebut, serta menerapkannya.';
        // $pelatihan->link = 'http://docs.google.com/';
        // $pelatihan->link_ppt = '';
        $pelatihan->type = 'tes';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Evaluasi Pelatihan';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari evaluasi pelatihan.';
        // $pelatihan->link = 'http://docs.google.com/';
        // $pelatihan->link_ppt = '';
        $pelatihan->type = 'tes';
        $pelatihan->save();
    }
}
