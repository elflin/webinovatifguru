@extends('layouts.app')
@section('title', 'User')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
    </div>

    <!-- Content Row -->
    <div class="">
        
        <table id="table_id" class="table">
            <thead>
                <tr>
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
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
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

                        @if ($user->isAdmin != 1)
                        <td class="text-center">
                            <a class="nav-link text-black-50" type="button" id="dropdownUser-{{ $user->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-ellipsis-h"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownUser-{{ $user->id }}">
                                <form action="{{ route('admin.user.promote', $user->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="PATCH">
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-chart-bar fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Promote
                                    </button>
                                </form>
                            </div>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->

@endsection