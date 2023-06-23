<table class="table" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No Aplikasi</th>
            <th>No Item</th>
            <th>Variabel</th>
            <th>Soal</th>
            <th>Dimensi</th>
            <th>Ukuran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($soals as $soal)
            <tr>
                <td>{{ $soal->id }}</td>
                <td>{{ $soal->no_item }}</td>
                <td>{{ $soal->variabel }}</td>
                <td>{{ $soal->soal }}</td>
                <td>{{ $soal->dimensi }}</td>
                <td>{{ $soal->ukuran }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
