@extends('layouts.app')
@section('title', 'Pelatihan')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pelatihan</h1>
        </div>

        <!-- Content Row -->
        <div class="d-flex justify-content-end w-100">
            <a href="{{ route('admin.pelatihan.create') }}" class="btn btn-primary">Create Pelatihan</a>
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
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Link</th>
                            <th>Type</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelatihans as $pelatihan)
                            <tr>
                                <td>{{ $pelatihan->id }}</td>
                                <td><a href="{{route('admin.pelatihan.show', $pelatihan->id)}}">{{$pelatihan->judul}}</a></td>
                                <td>{{ $pelatihan->deskripsi }}</td>
                                <td>{{ $pelatihan->link }}</td>
                                <td>{{ $pelatihan->type }}</td>
                                <td class="text-center">
                                    <a class="nav-link text-black-50" type="button"
                                        id="dropdownMenuButton-{{ $pelatihan->id }}" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-ellipsis-h"></i>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton-{{ $pelatihan->id }}">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.pelatihan.edit', $pelatihan->id) }}">
                                            <i class="fas fa-pencil-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Edit
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#deletePelatihan-{{ $pelatihan->id }}">
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
    @foreach ($pelatihans as $pelatihan)
        <div class="modal fade" id="deletePelatihan-{{ $pelatihan->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Pelatihan {{ $pelatihan->no_item }}</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin untuk menghapus pelatihan ini?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('admin.pelatihan.destroy', $pelatihan->id) }}" method="post">
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
