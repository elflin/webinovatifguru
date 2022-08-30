<table class="table" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Usia</th>
            <th>Jenis Kelamin</th>
            <th>Status Pernikahan</th>
            <th>Jumlah Anak</th>
            <th>Asal Sekolah</th>
            <th>Lama Mengajar</th>
            <th>Jenjang Mengajar</th>
            <th>Mata Pelajaran</th>
            <th>Pendidikan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <a href="{{ route('admin.history.show', $user->id) }}">
                        {{ $user->name }}
                    </a>
                </td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->isAdmin == 1)
                        Admin
                    @else
                        User
                    @endif
                </td>
                <td>{{ $user->usia }}</td>
                <td>{{ $user->jenis_kelamin }}</td>
                <td>{{ $user->status_pernikahan }}</td>
                <td>{{ $user->jumlah_anak }}</td>
                <td>{{ $user->asal_sekolah }}</td>
                <td>{{ $user->lama_mengajar }}</td>
                <td>{{ $user->jenjang_mengajar }}</td>
                <td>{{ $user->mata_pelajaran }}</td>
                <td>{{ $user->pendidikan }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Usia</th>
            <th>Jenis Kelamin</th>
            <th>Status Pernikahan</th>
            <th>Jumlah Anak</th>
            <th>Asal Sekolah</th>
            <th>Lama Mengajar</th>
            <th>Jenjang Mengajar</th>
            <th>Mata Pelajaran</th>
            <th>Pendidikan</th>
        </tr>
    </tfoot>
</table>
