@extends('layouts.app')
@section('title', 'Create Soal')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Test Soal</h1>
        </div>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('admin.test_soal.store') }}" method="post">
                @csrf
                <input type="hidden" name="id_pelatihan" value="{{ $pelatihan->id }}">
                <div class="form-group">
                    <label>Soal:</label>
                    <textarea type="text" class="form-control" name="soal"></textarea>
                </div>
                <div class="form-group">
                    <label>Jawaban A:</label>
                    <input type="text" class="form-control" name="jawabanA" required>
                </div>
                <div class="form-group">
                    <label>Jawaban B:</label>
                    <input type="text" class="form-control" name="jawabanB" required>
                </div>
                <div class="form-group">
                    <label>Jawaban C:</label>
                    <input type="text" class="form-control" name="jawabanC" required>
                </div>
                <div class="form-group">
                    <label>Jawaban D:</label>
                    <input type="text" class="form-control" name="jawabanD" required>
                </div>
                <div class="form-group">
                    <label>Jawaban E:</label>
                    <input type="text" class="form-control" name="jawabanE" required>
                </div>
                <div class="form-group">
                    <label>Kunci:</label>
                    <input type="text" class="form-control" name="kunci" required>
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
