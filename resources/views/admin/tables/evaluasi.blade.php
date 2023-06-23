<table class="table" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Jenjang</th>
            <th>Asal Sekolah</th>
            <th>Jawaban 1</th>
            <th>Jawaban 2</th>
            <th>Jawaban 3</th>
            <th>Jawaban 4</th>
            <th>Jawaban 5</th>
            <th>Jawaban 6</th>
            <th>Jawaban 7</th>
            <th>Pesan Kesan</th>
            <th>Skor</th>
            {{-- <th class="text-center">Actions</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($evaluasi_jawabans as $evaluasi_jawaban)
            @php
                $skor = 0;
                if ($evaluasi_jawaban->jawaban1 == 'STS') {
                    $skor += 1;
                } elseif ($evaluasi_jawaban->jawaban1 == 'TS') {
                    $skor += 2;
                } elseif ($evaluasi_jawaban->jawaban1 == 'R') {
                    $skor += 3;
                } elseif ($evaluasi_jawaban->jawaban1 == 'S') {
                    $skor += 4;
                } elseif ($evaluasi_jawaban->jawaban1 == 'SS') {
                    $skor += 5;
                }
                if ($evaluasi_jawaban->jawaban2 == 'STS') {
                    $skor += 1;
                } elseif ($evaluasi_jawaban->jawaban2 == 'TS') {
                    $skor += 2;
                } elseif ($evaluasi_jawaban->jawaban2 == 'R') {
                    $skor += 3;
                } elseif ($evaluasi_jawaban->jawaban2 == 'S') {
                    $skor += 4;
                } elseif ($evaluasi_jawaban->jawaban2 == 'SS') {
                    $skor += 5;
                }
                if ($evaluasi_jawaban->jawaban3 == 'STS') {
                    $skor += 1;
                } elseif ($evaluasi_jawaban->jawaban3 == 'TS') {
                    $skor += 2;
                } elseif ($evaluasi_jawaban->jawaban3 == 'R') {
                    $skor += 3;
                } elseif ($evaluasi_jawaban->jawaban3 == 'S') {
                    $skor += 4;
                } elseif ($evaluasi_jawaban->jawaban3 == 'SS') {
                    $skor += 5;
                }
                if ($evaluasi_jawaban->jawaban4 == 'STS') {
                    $skor += 1;
                } elseif ($evaluasi_jawaban->jawaban4 == 'TS') {
                    $skor += 2;
                } elseif ($evaluasi_jawaban->jawaban4 == 'R') {
                    $skor += 3;
                } elseif ($evaluasi_jawaban->jawaban4 == 'S') {
                    $skor += 4;
                } elseif ($evaluasi_jawaban->jawaban4 == 'SS') {
                    $skor += 5;
                }
                if ($evaluasi_jawaban->jawaban5 == 'STS') {
                    $skor += 1;
                } elseif ($evaluasi_jawaban->jawaban5 == 'TS') {
                    $skor += 2;
                } elseif ($evaluasi_jawaban->jawaban5 == 'R') {
                    $skor += 3;
                } elseif ($evaluasi_jawaban->jawaban5 == 'S') {
                    $skor += 4;
                } elseif ($evaluasi_jawaban->jawaban5 == 'SS') {
                    $skor += 5;
                }
                if ($evaluasi_jawaban->jawaban6 == 'STS') {
                    $skor += 1;
                } elseif ($evaluasi_jawaban->jawaban6 == 'TS') {
                    $skor += 2;
                } elseif ($evaluasi_jawaban->jawaban6 == 'R') {
                    $skor += 3;
                } elseif ($evaluasi_jawaban->jawaban6 == 'S') {
                    $skor += 4;
                } elseif ($evaluasi_jawaban->jawaban6 == 'SS') {
                    $skor += 5;
                }
                if ($evaluasi_jawaban->jawaban7 == 'STS') {
                    $skor += 1;
                } elseif ($evaluasi_jawaban->jawaban7 == 'TS') {
                    $skor += 2;
                } elseif ($evaluasi_jawaban->jawaban7 == 'R') {
                    $skor += 3;
                } elseif ($evaluasi_jawaban->jawaban7 == 'S') {
                    $skor += 4;
                } elseif ($evaluasi_jawaban->jawaban7 == 'SS') {
                    $skor += 5;
                }
            @endphp
            <tr>
                <td>{{ $evaluasi_jawaban->id }}</td>
                @if ($evaluasi_jawaban->progress)
                    <td>{{ $evaluasi_jawaban->progress->progress_histories->user->name }}
                    </td>
                @endif
                <td>{{ $evaluasi_jawaban->progress->progress_histories->user->jenjang_mengajar }}</td>
                <td>{{ $evaluasi_jawaban->progress->progress_histories->user->asal_sekolah }}</td>
                <td>{{ $evaluasi_jawaban->jawaban1 }}</td>
                <td>{{ $evaluasi_jawaban->jawaban2 }}</td>
                <td>{{ $evaluasi_jawaban->jawaban3 }}</td>
                <td>{{ $evaluasi_jawaban->jawaban4 }}</td>
                <td>{{ $evaluasi_jawaban->jawaban5 }}</td>
                <td>{{ $evaluasi_jawaban->jawaban6 }}</td>
                <td>{{ $evaluasi_jawaban->jawaban7 }}</td>
                <td>{{ $evaluasi_jawaban->pesan_kesan }}</td>
                <td>{{ $skor }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
