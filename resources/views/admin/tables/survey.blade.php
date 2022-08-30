@foreach ($historyList as $key => $hl)
    @if ($loop->first)
        <table class="table">
            <tr>
                <th>Variabel</th>
                <th>Value</th>
                <th>Idea Generation</th>
                <th>Idea Promotion</th>
                <th>Idea Realization</th>
                <th>Variabel</th>
                <th>Value</th>
                <th>Intensi Berinovasi</th>
                <th>Variabel</th>
                <th>Value</th>
                <th>Family Expectations For Creativity</th>
                <th>Risk Of Tolerance</th>
                <th>Openness To External Knowledge</th>
                <th>Variabel</th>
                <th>Value</th>
                <th>Family Expectations For Creativity</th>
                <th>Leader Expectations For Creativity</th>
                <th>Customer Expectations For Creativity</th>
                <th>Variabel</th>
                <th>Value</th>
                <th>Personal Assumptions/beliefs About Own Creativity</th>
                <th>Evidence-based Assessment Of Creative Self-efficacy</th>
                <th>Variabel</th>
                <th>Value</th>
                <th>Commitment To Learning</th>
                <th>Shared Vision</th>
                <th>Open-mindedness</th>
                <th>Intraorganizational Knowledge Sharing</th>
                <th>Variabel</th>
                <th>Value</th>
                <th>Intrinsic Motivation</th>
                <th>Identified Regulation</th>
                <th>Waktu</th>
            </tr>
    @endif
    <tr>
        <td>{{ $hl['variabel']['Perilaku Inovatif Guru'] }}</td>
        <td>{{ $hl['value']['Perilaku Inovatif Guru'] }}</td>
        <td>{{ $hl['dimensi']['Idea Generation'] }}</td>
        <td>{{ $hl['dimensi']['Idea Promotion'] }}</td>
        <td>{{ $hl['dimensi']['Idea Realization'] }}</td>
        <td>{{ $hl['variabel']['Intensi Berinovasi'] }}</td>
        <td>{{ $hl['value']['Intensi Berinovasi'] }}</td>
        <td>{{ $hl['dimensi']['Intensi Berinovasi'] }}</td>
        <td>{{ $hl['variabel']['Sikap Terhadap Inovasi'] }}</td>
        <td>{{ $hl['value']['Sikap Terhadap Inovasi'] }}</td>
        <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Risk Of Tolerance'] }}</td>
        <td>{{ $hl['dimensi']['Openness To External Knowledge'] }}</td>
        <td>{{ $hl['variabel']['Norma Subyektif terhadap Kreativitas'] }}</td>
        <td>{{ $hl['value']['Norma Subyektif terhadap Kreativitas'] }}</td>
        <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Leader Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Customer Expectations For Creativity'] }}</td>
        <td>{{ $hl['variabel']['Efikasi Berinovasi'] }}</td>
        <td>{{ $hl['value']['Efikasi Berinovasi'] }}</td>
        <td>{{ $hl['dimensi']['Personal Assumptions/beliefs About Own Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Evidence-based Assessment Of Creative Self-efficacy'] }}</td>
        <td>{{ $hl['variabel']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
        <td>{{ $hl['value']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
        <td>{{ $hl['dimensi']['Commitment To Learning'] }}</td>
        <td>{{ $hl['dimensi']['Shared Vision'] }}</td>
        <td>{{ $hl['dimensi']['Open-mindedness'] }}</td>
        <td>{{ $hl['dimensi']['Intraorganizational Knowledge Sharing'] }}</td>
        <td>{{ $hl['variabel']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
        <td>{{ $hl['value']['Budaya Organisasi Berorientasi Pembelajaran'] }}</td>
        <td>{{ $hl['dimensi']['Intrinsic Motivation'] }}</td>
        <td>{{ $hl['dimensi']['Identified Regulation'] }}</td>
        <td>{{ $hl['updated_at'] }}</td>
    </tr>
    @if ($loop->last)
        </table>
    @endif
@endforeach
