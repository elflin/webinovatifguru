<table class="table" id="dataTable2" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Skor</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($progresses as $progress)
            @php
                $skor = 0;
                foreach ($progress->test_jawaban->sortBy('id_test_soal') as $key => $test_jawaban) {
                    if ($test_jawaban->progress) {
                        if ($test_jawaban->progress->progress_histories->uid == $id) {
                            if ($test_jawaban->jawaban == $test_jawaban->test_soal->kunci) {
                                $skor += 100 / $progress->pelatihan->test_soal->count();
                            }
                        }
                    }
                }
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a
                        href="{{ route('admin.pelatihan.show', $progress->pelatihan->id) }}">{{ $progress->pelatihan->judul }}</a>
                </td>
                <td>{{ $skor }}/100</td>
                @foreach ($progress->test_jawaban->sortBy('id_test_soal') as $test_jawaban)
                    <td>{{ $test_jawaban->test_soal->soal }}</td>
                    <td>{{ $test_jawaban->jawaban }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
