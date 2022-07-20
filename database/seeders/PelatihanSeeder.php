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

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Informed Consent';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari informed consent.';
        $pelatihan->link = 'http://docs.google.com/';
        // $pelatihan->link_ppt = '';
        $pelatihan->type = 'Consent';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pre-test Learning';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari pre-test.';
        // $pelatihan->link = 'http://docs.google.com/';
        // $pelatihan->link_ppt = '';
        $pelatihan->type = 'Tes';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pertemuan 1';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari pertemuan 1.';
        $pelatihan->link = 'https://www.youtube.com/embed/-hFIdrxZy80';
        $pelatihan->link_ppt = 'https://docs.google.com/presentation/';
        $pelatihan->type = 'Materi';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pertemuan 2';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari pertemuan 2.';
        $pelatihan->link = 'https://www.youtube.com/embed/-hFIdrxZy80';
        $pelatihan->link_ppt = 'https://docs.google.com/presentation/';
        $pelatihan->type = 'Materi';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Pertemuan 3';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari pertemuan 3.';
        $pelatihan->link = 'https://www.youtube.com/embed/-hFIdrxZy80';
        $pelatihan->link_ppt = 'https://docs.google.com/presentation/';
        $pelatihan->type = 'Materi';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Post-test Learning';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari post-test.';
        // $pelatihan->link = 'http://docs.google.com/';
        // $pelatihan->link_ppt = '';
        $pelatihan->type = 'Tes';
        $pelatihan->save();

        $pelatihan = new pelatihan();
        $pelatihan->judul = 'Evaluasi Pelatihan';
        $pelatihan->deskripsi = 'Ini adalah test deskripsi dari evaluasi pelatihan.';
        // $pelatihan->link = 'http://docs.google.com/';
        // $pelatihan->link_ppt = '';
        $pelatihan->type = 'Tes';
        $pelatihan->save();
    }
}
