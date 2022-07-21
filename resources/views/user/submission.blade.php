@extends('layouts.app')
@section('title', 'Profil')
@section('content')

@include('inc.navbarLandingPage')

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-5"></div>


<div class="bg-white">
    <div class="container py-4">
        <h1 class="text-info font-weight-bold">Upload Submission</h1>
        <h5 class="mt-3 font-weight-bold">
            {{ $progress->pelatihan->judul }}
        </h5>


        @if ($progress->status == 0)
        <form action="{{ route('user.training.submission_store', $progress->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            {{-- <div class="py-3 w-100 bg-light2 drag-area mt-5">
                <div class=" text-center">
                    <div class="d-flex justify-content-center">
                        <h3 class="text-danger">
                            <i class="fa fa-file-pdf"></i>
                        </h3>
                        <h3 class="text-primary ml-2">

                        <i class="fa fa-file-word"></i>
                        </h3>
                    </div>
                    <h4 class="headertext m-0">
                        Drag & Drop
                    </h4>
                    <div class="">
                        <h4 class="m-0 text-dark">
                            or <span class="text-purple buttontext cursor-pointer">Click to Upload</span>
                        </h4>
                    </div>

                    <h6>
                        Support: .pdf*, .doc*
                    </h6>
                </div>
            </div> --}}

                
            <div class="mb-5">
                <p>
                    Supported file: .pdf*, .doc*
                </p>
                <div class="d-flex align-items-center">
                    <h2 class="text-danger m-0">
                        <i class="fa fa-file-pdf"></i>
                    </h2>
                    <h2 class="text-primary m-0 ml-2">
                        <i class="fa fa-file-word"></i>
                    </h2>
                    <div class="buttontext btn btn-primary ml-3">
                        Upload File
                    </div>
                </div>
                
                <div class="textReplace">
                </div>
            </div>
            


            <input type="file" hidden id="inputPdf" name="uploaded_file">
            <input type="hidden" value="{{ $progress->id }}" name="progressId">

            <div class="text-center">
                <button class="mt-4 px-5 btn btn-info">
                    Submit
                </button>
            </div>

        </form>
        @else
        <div class="rounded bg-light2 px-3 py-3 my-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="bg-green px-2 py-1 text-white rounded">
                    <i class="fa fa-check"></i>
                    Done
                </div>
                <div>
                    {{ $progress->updated_at }}
                </div>
            </div>
            <a href="{{ asset('submission/'.$progress->path_submission) }}" download class="text-decoration-none mt-3 d-flex align-items-end">
                <h3 class="text-danger m-0">
                    <i class="fa fa-file-pdf"></i>
                </h3>
                <div class="ml-2 text-purple">
                    {{ $progress->path_submission }}
                </div>
            </a>
        </div>
        @endif
    </div>
</div>


@include('inc.footerLandingPage')

@endsection
