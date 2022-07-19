@extends('layouts.app')
@section('title', 'Evaluasi')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Evaluasi</h1>
        </div>

        {{-- <!-- Content Row -->
        <div class="d-flex justify-content-end w-100">
            <a href="{{ route('admin.evaluasi_jawaban.create') }}" class="btn btn-primary">Create Evaluasi</a>
        </div> --}}

        <!-- Content Row -->
        <div class="card shadow my-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-purple">Data Evaluasi</h6>
            </div>
            <div class="card-body">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
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
                                if ($evaluasi_jawaban->jawaban1 == 'sts') {
                                    $skor += 1;
                                } elseif ($evaluasi_jawaban->jawaban1 == 'ts') {
                                    $skor += 2;
                                } elseif ($evaluasi_jawaban->jawaban1 == 'r') {
                                    $skor += 3;
                                } elseif ($evaluasi_jawaban->jawaban1 == 's') {
                                    $skor += 4;
                                } elseif ($evaluasi_jawaban->jawaban1 == 'ss') {
                                    $skor += 5;
                                }
                                if ($evaluasi_jawaban->jawaban2 == 'sts') {
                                    $skor += 1;
                                } elseif ($evaluasi_jawaban->jawaban2 == 'ts') {
                                    $skor += 2;
                                } elseif ($evaluasi_jawaban->jawaban2 == 'r') {
                                    $skor += 3;
                                } elseif ($evaluasi_jawaban->jawaban2 == 's') {
                                    $skor += 4;
                                } elseif ($evaluasi_jawaban->jawaban2 == 'ss') {
                                    $skor += 5;
                                }
                                if ($evaluasi_jawaban->jawaban3 == 'sts') {
                                    $skor += 1;
                                } elseif ($evaluasi_jawaban->jawaban3 == 'ts') {
                                    $skor += 2;
                                } elseif ($evaluasi_jawaban->jawaban3 == 'r') {
                                    $skor += 3;
                                } elseif ($evaluasi_jawaban->jawaban3 == 's') {
                                    $skor += 4;
                                } elseif ($evaluasi_jawaban->jawaban3 == 'ss') {
                                    $skor += 5;
                                }
                                if ($evaluasi_jawaban->jawaban4 == 'sts') {
                                    $skor += 1;
                                } elseif ($evaluasi_jawaban->jawaban4 == 'ts') {
                                    $skor += 2;
                                } elseif ($evaluasi_jawaban->jawaban4 == 'r') {
                                    $skor += 3;
                                } elseif ($evaluasi_jawaban->jawaban4 == 's') {
                                    $skor += 4;
                                } elseif ($evaluasi_jawaban->jawaban4 == 'ss') {
                                    $skor += 5;
                                }
                                if ($evaluasi_jawaban->jawaban5 == 'sts') {
                                    $skor += 1;
                                } elseif ($evaluasi_jawaban->jawaban5 == 'ts') {
                                    $skor += 2;
                                } elseif ($evaluasi_jawaban->jawaban5 == 'r') {
                                    $skor += 3;
                                } elseif ($evaluasi_jawaban->jawaban5 == 's') {
                                    $skor += 4;
                                } elseif ($evaluasi_jawaban->jawaban5 == 'ss') {
                                    $skor += 5;
                                }
                                if ($evaluasi_jawaban->jawaban6 == 'sts') {
                                    $skor += 1;
                                } elseif ($evaluasi_jawaban->jawaban6 == 'ts') {
                                    $skor += 2;
                                } elseif ($evaluasi_jawaban->jawaban6 == 'r') {
                                    $skor += 3;
                                } elseif ($evaluasi_jawaban->jawaban6 == 's') {
                                    $skor += 4;
                                } elseif ($evaluasi_jawaban->jawaban6 == 'ss') {
                                    $skor += 5;
                                }
                                if ($evaluasi_jawaban->jawaban7 == 'sts') {
                                    $skor += 1;
                                } elseif ($evaluasi_jawaban->jawaban7 == 'ts') {
                                    $skor += 2;
                                } elseif ($evaluasi_jawaban->jawaban7 == 'r') {
                                    $skor += 3;
                                } elseif ($evaluasi_jawaban->jawaban7 == 's') {
                                    $skor += 4;
                                } elseif ($evaluasi_jawaban->jawaban7 == 'ss') {
                                    $skor += 5;
                                }
                            @endphp
                            <tr>
                                <td>{{ $evaluasi_jawaban->id }}</td>
                                <td>
                                    <a
                                        href="{{ route('admin.history.show', $evaluasi_jawaban->progress->progress_histories->user->id) }}">{{ $evaluasi_jawaban->progress->progress_histories->user->name }}</a>
                                </td>
                                <td>{{ $evaluasi_jawaban->jawaban1 }}</td>
                                <td>{{ $evaluasi_jawaban->jawaban2 }}</td>
                                <td>{{ $evaluasi_jawaban->jawaban3 }}</td>
                                <td>{{ $evaluasi_jawaban->jawaban4 }}</td>
                                <td>{{ $evaluasi_jawaban->jawaban5 }}</td>
                                <td>{{ $evaluasi_jawaban->jawaban6 }}</td>
                                <td>{{ $evaluasi_jawaban->jawaban7 }}</td>
                                <td>{{ $evaluasi_jawaban->pesan_kesan }}</td>
                                <td>{{ $skor }}</td>
                                {{-- <td class="text-center">
                                    <a class="nav-link text-black-50" type="button"
                                        id="dropdownMenuButton-{{ $evaluasi_jawaban->id }}" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-ellipsis-h"></i>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton-{{ $evaluasi_jawaban->id }}">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.evaluasi_jawaban.edit', $evaluasi_jawaban->id) }}">
                                            <i class="fas fa-pencil-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Edit
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#deleteEvaluasi-{{ $evaluasi_jawaban->id }}">
                                            <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Delete
                                        </a>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    {{-- Modal delete --}}
    {{-- @foreach ($evaluasi_jawabans as $evaluasi_jawaban)
        <div class="modal fade" id="deleteEvaluasi-{{ $evaluasi_jawaban->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Evaluasi {{ $evaluasi_jawaban->no_item }}
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin untuk menghapus evaluasi_jawaban ini?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('admin.evaluasi_jawaban.destroy', $evaluasi_jawaban->id) }}"
                            method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}

    <!-- End of Main Content -->

@endsection
