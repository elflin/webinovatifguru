@extends('layouts.app')
@section('title', 'Create Pelatihan')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Pelatihan</h1>
        </div>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('admin.pelatihan.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Judul:</label>
                    <input type="text" class="form-control" name="judul" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi:</label>
                    <textarea type="text" class="form-control" name="deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label>Link:</label>
                    <input type="text" class="form-control" name="link" required>
                </div>
                <div class="form-group">
                    <label>Tipe:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="tes">Tes</option>
                        <option value="materi">Materi</option>
                        <option value="consent">Consent</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Tambah Pelatihan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- End of Main Content -->

@endsection
