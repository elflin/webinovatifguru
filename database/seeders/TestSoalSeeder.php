<?php

namespace Database\Seeders;

use App\Models\test_soal;
use Illuminate\Database\Seeder;

class TestSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Tiga cara membangun sikap dan efikasi berinovasi adalah:';
        $soal->jawabanA = 'Stop paradigma lama, thinking out of the box, self-talk';
        $soal->jawabanB = 'Positive thinking, goal setting, empati';
        $soal->jawabanC = 'Creative thinking, entrepreneurial mindset, pantang menyerah';
        $soal->jawabanD = 'Self-awareness, other awareness, berkolaborasi';
        $soal->jawabanE = 'Mengembangkan visi, monitoring & evaluation, team building';
        $soal->kunci = 'Stop paradigma lama, thinking out of the box, self-talk';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Paradigma kita dibentuk dari:';
        $soal->jawabanA = 'Pengalaman dan kebiasaan';
        $soal->jawabanB = 'Cita-cita dan harapan';
        $soal->jawabanC = 'Motivasi dan ekspektasi';
        $soal->jawabanD = 'Tujuan dan kebutuhan psikologis';
        $soal->jawabanE = 'Jenis kelamin dan sosial ekonomi';
        $soal->kunci = 'Pengalaman dan kebiasaan';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Berikut ini yang merupakan contoh berpikir divergen:';
        $soal->jawabanA = 'Merangkai asesoris dari botol-botol plastik bekas.';
        $soal->jawabanB = 'Memanfaatkan gelas plastik untuk minum boba.';
        $soal->jawabanC = 'Menggunakan kalkulator untuk menghitung profit bisnis.';
        $soal->jawabanD = 'Menggelar kertas karton untuk menggambarkan mind-map.';
        $soal->jawabanE = 'Memfungsikan handphone untuk mengontak rekan bisnis.';
        $soal->kunci = 'Merangkai asesoris dari botol-botol plastik bekas.';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Berikut ini yang bukan sumber efikasi berinovasi adalah:';
        $soal->jawabanA = 'Innovation goal';
        $soal->jawabanB = 'Mastery experience';
        $soal->jawabanC = 'Pengalaman keberhasilan';
        $soal->jawabanD = 'Vicarious experience';
        $soal->jawabanE = 'Kesuksesan orang lain';
        $soal->kunci = 'Innovation goal';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Pengalaman keberhasilan orang lain yang menjadi role model untuk meningkatkan keyakinan atau efikasi diri disebut:';
        $soal->jawabanA = 'Vicarious experience';
        $soal->jawabanB = 'Innovation goal';
        $soal->jawabanC = 'Mastery experience';
        $soal->jawabanD = 'Creativity vision';
        $soal->jawabanE = 'Emotional states';
        $soal->kunci = 'Vicarious experience';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Cara praktis untuk meningkatkan keyakinan atau efikasi diri adalah:';
        $soal->jawabanA = 'Self talk';
        $soal->jawabanB = 'Self defence';
        $soal->jawabanC = 'Self confidence';
        $soal->jawabanD = 'Self service';
        $soal->jawabanE = 'Self report';
        $soal->kunci = 'Self talk';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Tiga cara memperkuat intensi berinovasi:';
        $soal->jawabanA = 'Planning with risk awareness, antisipasi risiko & action control';
        $soal->jawabanB = 'Problem identification, hypothesis making, data gathering, analisis.';
        $soal->jawabanC = 'Self discovery, meminta feedback, goal setting, share the experience.';
        $soal->jawabanD = 'Vicarious experience, innovation goal, emotional states & creativity vision.';
        $soal->jawabanE = 'Shift paradigm, thinking out of the box, originality & divergent thinking.';
        $soal->kunci = 'Planning with risk awareness, antisipasi risiko & action control';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Intensi berinovasi memerlukan perencanaan yang diikuti dengan kesadaran:';
        $soal->jawabanA = 'Risiko';
        $soal->jawabanB = 'Masa lampau';
        $soal->jawabanC = 'Diri';
        $soal->jawabanD = 'Penuh';
        $soal->jawabanE = 'Orang lain';
        $soal->kunci = 'Risiko';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Risiko perlu diantisipasi dengan tindakan-tindakan:';
        $soal->jawabanA = 'Proaktif';
        $soal->jawabanB = 'Reaktif';
        $soal->jawabanC = 'Asumtif';
        $soal->jawabanD = 'Spekulatif';
        $soal->jawabanE = 'Aktraktif';
        $soal->kunci = 'Proaktif';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 1;
        $soal->soal = 'Salah satu wujud action control adalah:';
        $soal->jawabanA = 'Timeline';
        $soal->jawabanB = 'Guideline';
        $soal->jawabanC = 'Hotline';
        $soal->jawabanD = 'Online';
        $soal->jawabanE = 'Underline';
        $soal->kunci = 'Timeline';
        $soal->save();

        // next

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Tiga cara membangun sikap dan efikasi berinovasi adalah:';
        $soal->jawabanA = 'Stop paradigma lama, thinking out of the box, self-talk';
        $soal->jawabanB = 'Positive thinking, goal setting, empati';
        $soal->jawabanC = 'Creative thinking, entrepreneurial mindset, pantang menyerah';
        $soal->jawabanD = 'Self-awareness, other awareness, berkolaborasi';
        $soal->jawabanE = 'Mengembangkan visi, monitoring & evaluation, team building';
        $soal->kunci = 'Stop paradigma lama, thinking out of the box, self-talk';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Paradigma kita dibentuk dari:';
        $soal->jawabanA = 'Pengalaman dan kebiasaan';
        $soal->jawabanB = 'Cita-cita dan harapan';
        $soal->jawabanC = 'Motivasi dan ekspektasi';
        $soal->jawabanD = 'Tujuan dan kebutuhan psikologis';
        $soal->jawabanE = 'Jenis kelamin dan sosial ekonomi';
        $soal->kunci = 'Pengalaman dan kebiasaan';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Berikut ini yang merupakan contoh berpikir divergen:';
        $soal->jawabanA = 'Merangkai asesoris dari botol-botol plastik bekas.';
        $soal->jawabanB = 'Memanfaatkan gelas plastik untuk minum boba.';
        $soal->jawabanC = 'Menggunakan kalkulator untuk menghitung profit bisnis.';
        $soal->jawabanD = 'Menggelar kertas karton untuk menggambarkan mind-map.';
        $soal->jawabanE = 'Memfungsikan handphone untuk mengontak rekan bisnis.';
        $soal->kunci = 'Merangkai asesoris dari botol-botol plastik bekas.';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Berikut ini yang bukan sumber efikasi berinovasi adalah:';
        $soal->jawabanA = 'Innovation goal';
        $soal->jawabanB = 'Mastery experience';
        $soal->jawabanC = 'Pengalaman keberhasilan';
        $soal->jawabanD = 'Vicarious experience';
        $soal->jawabanE = 'Kesuksesan orang lain';
        $soal->kunci = 'Innovation goal';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Pengalaman keberhasilan orang lain yang menjadi role model untuk meningkatkan keyakinan atau efikasi diri disebut:';
        $soal->jawabanA = 'Vicarious experience';
        $soal->jawabanB = 'Innovation goal';
        $soal->jawabanC = 'Mastery experience';
        $soal->jawabanD = 'Creativity vision';
        $soal->jawabanE = 'Emotional states';
        $soal->kunci = 'Vicarious experience';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Cara praktis untuk meningkatkan keyakinan atau efikasi diri adalah:';
        $soal->jawabanA = 'Self talk';
        $soal->jawabanB = 'Self defence';
        $soal->jawabanC = 'Self confidence';
        $soal->jawabanD = 'Self service';
        $soal->jawabanE = 'Self report';
        $soal->kunci = 'Self talk';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Tiga cara memperkuat intensi berinovasi:';
        $soal->jawabanA = 'Planning with risk awareness, antisipasi risiko & action control';
        $soal->jawabanB = 'Problem identification, hypothesis making, data gathering, analisis.';
        $soal->jawabanC = 'Self discovery, meminta feedback, goal setting, share the experience.';
        $soal->jawabanD = 'Vicarious experience, innovation goal, emotional states & creativity vision.';
        $soal->jawabanE = 'Shift paradigm, thinking out of the box, originality & divergent thinking.';
        $soal->kunci = 'Planning with risk awareness, antisipasi risiko & action control';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Intensi berinovasi memerlukan perencanaan yang diikuti dengan kesadaran:';
        $soal->jawabanA = 'Risiko';
        $soal->jawabanB = 'Masa lampau';
        $soal->jawabanC = 'Diri';
        $soal->jawabanD = 'Penuh';
        $soal->jawabanE = 'Orang lain';
        $soal->kunci = 'Risiko';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Risiko perlu diantisipasi dengan tindakan-tindakan:';
        $soal->jawabanA = 'Proaktif';
        $soal->jawabanB = 'Reaktif';
        $soal->jawabanC = 'Asumtif';
        $soal->jawabanD = 'Spekulatif';
        $soal->jawabanE = 'Aktraktif';
        $soal->kunci = 'Proaktif';
        $soal->save();

        $soal = new test_soal();
        $soal->id_pelatihan = 5;
        $soal->soal = 'Salah satu wujud action control adalah:';
        $soal->jawabanA = 'Timeline';
        $soal->jawabanB = 'Guideline';
        $soal->jawabanC = 'Hotline';
        $soal->jawabanD = 'Online';
        $soal->jawabanE = 'Underline';
        $soal->kunci = 'Timeline';
        $soal->save();
    }
}
