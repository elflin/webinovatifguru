<?php

namespace Database\Seeders;

use App\Models\skala;
use Illuminate\Database\Seeder;

class SkalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PG / TK
        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'PG/TK';
        $skala->variabel = "Perilaku Inovatif Guru";
        $skala->sangat_rendah = 20.3;
        $skala->rendah = 26.6;
        $skala->cukup = 32.9;
        $skala->tinggi = 39.2;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'PG/TK';
        $skala->variabel = "Intensi Berinovasi";
        $skala->sangat_rendah = 20.5;
        $skala->rendah = 23;
        $skala->cukup = 25.5;
        $skala->tinggi = 28;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'PG/TK';
        $skala->variabel = "Sikap Terhadap Inovasi";
        $skala->sangat_rendah = 40.1;
        $skala->rendah = 45.2;
        $skala->cukup = 50.3;
        $skala->tinggi = 55.4;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'PG/TK';
        $skala->variabel = "Norma Subyektif terhadap Kreativitas";
        $skala->sangat_rendah = 42.7;
        $skala->rendah = 48.4;
        $skala->cukup = 54.1;
        $skala->tinggi = 59.8;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'PG/TK';
        $skala->variabel = "Efikasi Berinovasi";
        $skala->sangat_rendah = 41.9;
        $skala->rendah = 47.8;
        $skala->cukup = 53.7;
        $skala->tinggi = 59.6;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'PG/TK';
        $skala->variabel = "Budaya Organisasi Berorientasi Pembelajaran";
        $skala->sangat_rendah = 76.1;
        $skala->rendah = 82.2;
        $skala->cukup = 88.3;
        $skala->tinggi = 94.4;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'PG/TK';
        $skala->variabel = "Self-Determination";
        $skala->sangat_rendah = 24.5;
        $skala->rendah = 26;
        $skala->cukup = 27.5;
        $skala->tinggi = 29;
        $skala->save();

        // SD
        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SD';
        $skala->variabel = "Perilaku Inovatif Guru";
        $skala->sangat_rendah = 22.7;
        $skala->rendah = 28.4;
        $skala->cukup = 34.1;
        $skala->tinggi = 39.8;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SD';
        $skala->variabel = "Intensi Berinovasi";
        $skala->sangat_rendah = 22.1;
        $skala->rendah = 24.2;
        $skala->cukup = 26.3;
        $skala->tinggi = 28.4;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SD';
        $skala->variabel = "Sikap Terhadap Inovasi";
        $skala->sangat_rendah = 43.3;
        $skala->rendah = 47.6;
        $skala->cukup = 51.9;
        $skala->tinggi = 56.2;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SD';
        $skala->variabel = "Norma Subyektif terhadap Kreativitas";
        $skala->sangat_rendah = 43.5;
        $skala->rendah = 49;
        $skala->cukup = 54.5;
        $skala->tinggi = 60;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SD';
        $skala->variabel = "Efikasi Berinovasi";
        $skala->sangat_rendah = 38.7;
        $skala->rendah = 45.4;
        $skala->cukup = 52.1;
        $skala->tinggi = 58.8;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SD';
        $skala->variabel = "Budaya Organisasi Berorientasi Pembelajaran";
        $skala->sangat_rendah = 67.3;
        $skala->rendah = 75.6;
        $skala->cukup = 83.9;
        $skala->tinggi = 92.2;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SD';
        $skala->variabel = "Self-Determination";
        $skala->sangat_rendah = 20.5;
        $skala->rendah = 23;
        $skala->cukup = 25.5;
        $skala->tinggi = 28;
        $skala->save();

        // SMP
        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMP';
        $skala->variabel = "Perilaku Inovatif Guru";
        $skala->sangat_rendah = 23.1;
        $skala->rendah = 28.2;
        $skala->cukup = 33.3;
        $skala->tinggi = 38.4;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMP';
        $skala->variabel = "Intensi Berinovasi";
        $skala->sangat_rendah = 18.1;
        $skala->rendah = 21.2;
        $skala->cukup = 24.3;
        $skala->tinggi = 27.4;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMP';
        $skala->variabel = "Sikap Terhadap Inovasi";
        $skala->sangat_rendah = 39.3;
        $skala->rendah = 44.6;
        $skala->cukup = 49.9;
        $skala->tinggi = 55.2;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMP';
        $skala->variabel = "Norma Subyektif terhadap Kreativitas";
        $skala->sangat_rendah = 41.9;
        $skala->rendah = 47.8;
        $skala->cukup = 53.7;
        $skala->tinggi = 59.6;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMP';
        $skala->variabel = "Efikasi Berinovasi";
        $skala->sangat_rendah = 37.1;
        $skala->rendah = 44.2;
        $skala->cukup = 51.3;
        $skala->tinggi = 58.4;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMP';
        $skala->variabel = "Budaya Organisasi Berorientasi Pembelajaran";
        $skala->sangat_rendah = 66.5;
        $skala->rendah = 75;
        $skala->cukup = 83.5;
        $skala->tinggi = 92;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMP';
        $skala->variabel = "Self-Determination";
        $skala->sangat_rendah = 19.7;
        $skala->rendah = 22.4;
        $skala->cukup = 25.1;
        $skala->tinggi = 27.8;
        $skala->save();

        // SMA
        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMA';
        $skala->variabel = "Perilaku Inovatif Guru";
        $skala->sangat_rendah = 23.5;
        $skala->rendah = 29;
        $skala->cukup = 34.5;
        $skala->tinggi = 40;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMA';
        $skala->variabel = "Intensi Berinovasi";
        $skala->sangat_rendah = 20.5;
        $skala->rendah = 23;
        $skala->cukup = 25.5;
        $skala->tinggi = 28;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMA';
        $skala->variabel = "Sikap Terhadap Inovasi";
        $skala->sangat_rendah = 42.5;
        $skala->rendah = 47;
        $skala->cukup = 51.5;
        $skala->tinggi = 56;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMA';
        $skala->variabel = "Norma Subyektif terhadap Kreativitas";
        $skala->sangat_rendah = 41.9;
        $skala->rendah = 47.8;
        $skala->cukup = 53.7;
        $skala->tinggi = 59.6;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMA';
        $skala->variabel = "Efikasi Berinovasi";
        $skala->sangat_rendah = 36.5;
        $skala->rendah = 41;
        $skala->cukup = 45.5;
        $skala->tinggi = 50;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMA';
        $skala->variabel = "Budaya Organisasi Berorientasi Pembelajaran";
        $skala->sangat_rendah = 68.1;
        $skala->rendah = 76.2;
        $skala->cukup = 84.3;
        $skala->tinggi = 92.4;
        $skala->save();

        $skala = new skala();
        $skala->created_at = \Carbon\Carbon::now();
        $skala->updated_at = \Carbon\Carbon::now();
        $skala->jenjang_mengajar = 'SMA';
        $skala->variabel = "Self-Determination";
        $skala->sangat_rendah = 18.9;
        $skala->rendah = 21.8;
        $skala->cukup = 24.7;
        $skala->tinggi = 27.6;
        $skala->save();
    }
}
