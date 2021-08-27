@extends('layouts.app')
@section('title', 'Create Soal')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Soal</h1>
    </div>

    <!-- Content Row -->
    <div class="">
        <form action="{{ route('admin.soal.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nomor Aplikasi:</label>
                <input type="number" class="form-control" name="id" required>
            </div>
            <div class="form-group">
                <label>Nomor Item:</label>
                <input type="text" class="form-control" name="no_item" required>
            </div>
            <div class="form-group">
                <label>Variabel:</label>
                <select name="variabel" class="custom-select">
                    <option value="Perilaku Inovartif Guru">Perilaku Inovartif Guru</option>
                    <option value="Intensi Berinovasi">Intensi Berinovasi</option>
                    <option value="Sikap Terhadap Inovasi">Sikap Terhadap Inovasi</option>
                    <option value="Norma Subyektif terhadap Kreativitas">Norma Subyektif terhadap Kreativitas</option>
                    <option value="Efikasi Berinovasi">Efikasi Berinovasi</option>
                    <option value="Budaya Organisasi Berorientasi Pembelajaran">Budaya Organisasi Berorientasi Pembelajaran</option>
                    <option value="Self-Determination">Self-Determination</option>

                </select>
            </div>
            <div class="form-group">
                <label>Soal:</label>
                <textarea type="text" class="form-control" name="soal"></textarea>
            </div>
            <div class="form-group">
                <label>Dimensi:</label>
                <input type="text" class="form-control" name="dimensi" required>
            </div>
            <div class="form-group">
                <label>Ukuran:</label>
                <input type="text" class="form-control" name="ukuran" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Tambah Soal</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection