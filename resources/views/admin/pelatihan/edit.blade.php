@extends('layouts.app')
@section('title', 'Edit Pelatihan')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Pelatihan</h1>
        </div>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('admin.pelatihan.update', $pelatihan->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Judul:</label>
                    <input type="text" class="form-control" name="judul" required value="{{ $pelatihan->judul }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi:</label>
                    <textarea type="text" class="form-control" name="deskripsi">{{ $pelatihan->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label>Link:</label>
                    <input type="text" class="form-control" name="link" required value="{{ $pelatihan->link }}">
                </div>
                <div class="form-group">
                    <label>Link PPT:</label>
                    <input type="text" class="form-control" name="link_ppt" required>
                </div>
                <div class="form-group">
                    <label>Tipe:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="tes" @if ($pelatihan->type == 'tes') selected @endif>Tes</option>
                        <option value="materi" @if ($pelatihan->type == 'materi') selected @endif>Materi</option>
                        <option value="consent" @if ($pelatihan->type == 'consent') selected @endif>Consent</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- End of Main Content -->

@endsection
