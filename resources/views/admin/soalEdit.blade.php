@extends('layouts.app')
@section('title', 'Edit Soal')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Soal</h1>
    </div>

    <!-- Content Row -->
    <div class="">
        <form action="{{ route('admin.soal.update', $soal->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label>Nomor Aplikasi:</label>
                <input type="number" class="form-control" name="id" value="{{ $soal->id }}" required>
            </div>
            <div class="form-group">
                <label>Nomor Item:</label>
                <input type="text" class="form-control" name="no_item" value="{{ $soal->no_item }}" required>
            </div>
            <div class="form-group">
                <label>Variabel:</label>
                <select name="variabel" class="custom-select">
                    <option hidden value="{{$soal->variabel}}">
                        {{ $soal->variabel }}
                    </option>
                    <option value="Perilaku Inovartif Guru">Perilaku Inovartif Guru</option>
                    <option value="Intensi Berinovasi">Intensi Berinovasi</option>
                    <option value="Sikap Terhadap Inovasi">Sikap Terhadap Inovasi</option>
                    <option value="Norma Subyektif terhadap Kreativitas">Norma Subyektif terhadap Kreativitas</option>
                    <option value="Budaya Organisasi Berorientasi Pembelajaran">Budaya Organisasi Berorientasi Pembelajaran</option>
                    <option value="Self-Determination">Self-Determination</option>
                </select>
            </div>
            <div class="form-group">
                <label>Soal:</label>
                <textarea type="text" class="form-control" name="soal">{{ $soal->soal }}</textarea>
            </div>
            <div class="form-group">
                <label>Dimensi:</label>
                <input type="text" class="form-control" name="dimensi" required value="{{ $soal->dimensi }}">
            </div>
            <div class="form-group">
                <label>Ukuran:</label>
                <input type="text" class="form-control" name="ukuran" value="{{ $soal->ukuran }}" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Edit Soal</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection