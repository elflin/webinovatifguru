@extends('layouts.app')
@section('title', 'Edit Soal')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Test Soal</h1>
        </div>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('admin.test_soal.update', $test_soal->id) }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id_pelatihan" value="{{$test_soal->id_pelatihan}}">
                <div class="form-group">
                    <label>Soal:</label>
                    <textarea type="text" class="form-control" name="soal">{{ $test_soal->soal }}</textarea>
                </div>
                <div class="form-group">
                    <label>Jawaban A:</label>
                    <input type="text" class="form-control" name="jawabanA" required value="{{ $test_soal->jawabanA }}">
                </div>
                <div class="form-group">
                    <label>Jawaban B:</label>
                    <input type="text" class="form-control" name="jawabanB" required value="{{ $test_soal->jawabanB }}">
                </div>
                <div class="form-group">
                    <label>Jawaban C:</label>
                    <input type="text" class="form-control" name="jawabanC" required value="{{ $test_soal->jawabanC }}">
                </div>
                <div class="form-group">
                    <label>Jawaban D:</label>
                    <input type="text" class="form-control" name="jawabanD" required value="{{ $test_soal->jawabanD }}">
                </div>
                <div class="form-group">
                    <label>Jawaban E:</label>
                    <input type="text" class="form-control" name="jawabanE" required value="{{ $test_soal->jawabanE }}">
                </div>
                <div class="form-group">
                    <label>Kunci:</label>
                    <input type="text" class="form-control" name="kunci" required value="{{ $test_soal->kunci }}">
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
