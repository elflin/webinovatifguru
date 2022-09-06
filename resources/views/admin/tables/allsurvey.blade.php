@php
$variabelDict = ['Perilaku Inovatif Guru', 'Intensi Berinovasi', 'Sikap Terhadap Inovasi', 'Norma Subyektif terhadap Kreativitas', 'Efikasi Berinovasi', 'Budaya Organisasi Berorientasi Pembelajaran', 'Self-Determination'];

$dimensiDict = ['Idea Generation', 'Idea Promotion', 'Idea Realization', 'Intensi Berinovasi', 'Support For Innovation', 'Risk Of Tolerance', 'Openness To External Knowledge', 'Family Expectations For Creativity', 'Leader Expectations For Creativity', 'Customer Expectations For Creativity', 'Personal Assumptions/beliefs About Own Creativity', 'Evidence-based Assessment Of Creative Self-efficacy', 'Commitment To Learning', 'Shared Vision', 'Open-mindedness', 'Intraorganizational Knowledge Sharing', 'Intrinsic Motivation', 'Identified Regulation'];

$historyList = [];

foreach ($histories as $history) {
    // return $history;
    $variabelList = [
        'Perilaku Inovatif Guru' => 0,
        'Intensi Berinovasi' => 0,
        'Sikap Terhadap Inovasi' => 0,
        'Norma Subyektif terhadap Kreativitas' => 0,
        'Efikasi Berinovasi' => 0,
        'Budaya Organisasi Berorientasi Pembelajaran' => 0,
        'Self-Determination' => 0,
    ];
    $valueList = [
        'Perilaku Inovatif Guru' => 'Rendah',
        'Intensi Berinovasi' => 'Rendah',
        'Sikap Terhadap Inovasi' => 'Rendah',
        'Norma Subyektif terhadap Kreativitas' => 'Rendah',
        'Efikasi Berinovasi' => 'Rendah',
        'Budaya Organisasi Berorientasi Pembelajaran' => 'Rendah',
        'Self-Determination' => 'Rendah',
    ];
    $dimensiList = [
        'Idea Generation' => 0,
        'Idea Promotion' => 0,
        'Idea Realization' => 0,
        'Intensi Berinovasi' => 0,
        'Support For Innovation' => 0,
        'Risk Of Tolerance' => 0,
        'Openness To External Knowledge' => 0,
        'Family Expectations For Creativity' => 0,
        'Leader Expectations For Creativity' => 0,
        'Customer Expectations For Creativity' => 0,
        'Personal Assumptions/beliefs About Own Creativity' => 0,
        'Evidence-based Assessment Of Creative Self-efficacy' => 0,
        'Commitment To Learning' => 0,
        'Shared Vision' => 0,
        'Open-mindedness' => 0,
        'Intraorganizational Knowledge Sharing' => 0,
        'Intrinsic Motivation' => 0,
        'Identified Regulation' => 0,
    ];

    $lastupdated = null;

    foreach ($history->soal as $jawaban) {
        // return $jawaban;
        foreach ($variabelDict as $var) {
            if ($jawaban->variabel == $var) {
                $variabelList[$var] += $jawaban->pivot->nilai;
            }
        }

        foreach ($dimensiDict as $dimensi) {
            if ($jawaban->dimensi == $dimensi) {
                $dimensiList[$dimensi] += $jawaban->pivot->nilai;
            }
        }

        $lastupdated = $jawaban->pivot->created_at->format('l, m-d-Y');
    }

    //Hitung value JANGAN LUPA
    $skalas = $scales->where('jenjang_mengajar', $history->user->jenjang_mengajar);

    foreach ($skalas as $skala) {
        foreach ($variabelDict as $variabelname) {
            if ($skala->variabel == $variabelname) {
                if ($variabelList[$variabelname] < $skala->sangat_rendah) {
                    $valueList[$variabelname] = 'Sangat Rendah';
                } elseif ($variabelList[$variabelname] < $skala->rendah) {
                    $valueList[$variabelname] = 'Rendah';
                } elseif ($variabelList[$variabelname] < $skala->cukup) {
                    $valueList[$variabelname] = 'Cukup';
                } elseif ($variabelList[$variabelname] < $skala->tinggi) {
                    $valueList[$variabelname] = 'Tinggi';
                } else {
                    $valueList[$variabelname] = 'Sangat Tinggi';
                }
            }
        }
    }

    $temp = [
        'historyId' => $history->id,
        'user' => $history->user->name,
        'jenjang' => $history->user->jenjang_mengajar,
        'sekolah' => $history->user->asal_sekolah,
        'variabel' => $variabelList,
        'value' => $valueList,
        'dimensi' => $dimensiList,
        'updated_at' => $lastupdated,
    ];

    array_push($historyList, $temp);
}
@endphp
@foreach ($historyList as $key => $hl)
    @if ($loop->first)
        <table class="table">
            <tr>
                <th>User</th>
                <th>Jenjang</th>
                <th>Asal Sekolah</th>
                <th>Idea Generation</th>
                <th>Idea Promotion</th>
                <th>Idea Realization</th>
                <th>Intensi Berinovasi</th>
                <th>Family Expectations For Creativity</th>
                <th>Risk Of Tolerance</th>
                <th>Openness To External Knowledge</th>
                <th>Family Expectations For Creativity</th>
                <th>Leader Expectations For Creativity</th>
                <th>Customer Expectations For Creativity</th>
                <th>Personal Assumptions/beliefs About Own Creativity</th>
                <th>Evidence-based Assessment Of Creative Self-efficacy</th>
                <th>Commitment To Learning</th>
                <th>Shared Vision</th>
                <th>Open-mindedness</th>
                <th>Intraorganizational Knowledge Sharing</th>
                <th>Intrinsic Motivation</th>
                <th>Identified Regulation</th>
                <th>Waktu</th>
            </tr>
    @endif
    <tr>
        <td>{{ $hl['user'] }}</td>
        <td>{{ $hl['jenjang'] }}</td>
        <td>{{ $hl['sekolah'] }}</td>
        <td>{{ $hl['dimensi']['Idea Generation'] }}</td>
        <td>{{ $hl['dimensi']['Idea Promotion'] }}</td>
        <td>{{ $hl['dimensi']['Idea Realization'] }}</td>
        <td>{{ $hl['dimensi']['Intensi Berinovasi'] }}</td>
        <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Risk Of Tolerance'] }}</td>
        <td>{{ $hl['dimensi']['Openness To External Knowledge'] }}</td>
        <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Leader Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Customer Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Personal Assumptions/beliefs About Own Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Evidence-based Assessment Of Creative Self-efficacy'] }}</td>
        <td>{{ $hl['dimensi']['Commitment To Learning'] }}</td>
        <td>{{ $hl['dimensi']['Shared Vision'] }}</td>
        <td>{{ $hl['dimensi']['Open-mindedness'] }}</td>
        <td>{{ $hl['dimensi']['Intraorganizational Knowledge Sharing'] }}</td>
        <td>{{ $hl['dimensi']['Intrinsic Motivation'] }}</td>
        <td>{{ $hl['dimensi']['Identified Regulation'] }}</td>
        <td>{{ $hl['updated_at'] }}</td>
    </tr>
    @if ($loop->last)
        </table>
    @endif
@endforeach
