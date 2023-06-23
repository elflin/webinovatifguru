@extends('layouts.app')
@section('title', 'Pelatihan')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $pelatihan->judul }}</h1>
        </div>

        <!-- Content Row -->
        <div class="d-flex justify-content-end w-100">
            <a href="{{ route('admin.pelatihan.soal_baru', $pelatihan->id) }}" class="btn btn-primary">Create Soal</a>
        </div>

        <!-- Content Row -->
        <div class="card shadow my-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-purple">Data Pelatihan</h6>
            </div>
            <div class="card-body">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Soal</th>
                            <th>Jawaban A</th>
                            <th>Jawaban B</th>
                            <th>Jawaban C</th>
                            <th>Jawaban D</th>
                            <th>Jawaban E</th>
                            <th>Kunci</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelatihan->test_soal as $test_soal)
                            <tr>
                                <td>{{ $test_soal->id }}</td>
                                <td>{{ $test_soal->soal }}</td>
                                <td>{{ $test_soal->jawabanA }}</td>
                                <td>{{ $test_soal->jawabanB }}</td>
                                <td>{{ $test_soal->jawabanC }}</td>
                                <td>{{ $test_soal->jawabanD }}</td>
                                <td>{{ $test_soal->jawabanE }}</td>
                                <td>{{ $test_soal->kunci }}</td>
                                <td class="text-center">
                                    <a class="nav-link text-black-50" type="button"
                                        id="dropdownMenuButton-{{ $test_soal->id }}" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-ellipsis-h"></i>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton-{{ $test_soal->id }}">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.test_soal.edit', $test_soal->id) }}">
                                            <i class="fas fa-pencil-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Edit
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#deleteTestSoal-{{ $test_soal->id }}">
                                            <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Delete
                                        </a>
                                    </div>
                                    {{-- <i class="fa-solid fa-ellipsis"></i> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>

    {{-- Modal delete --}}
    @foreach ($pelatihan->test_soal as $test_soal)
        <div class="modal fade" id="deleteTestSoal-{{ $test_soal->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Test Soal {{ $test_soal->no_item }}</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin untuk menghapus test soal ini?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('admin.test_soal.destroy', $test_soal->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- End of Main Content -->

@endsection
