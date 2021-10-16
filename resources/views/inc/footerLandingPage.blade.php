@if (!Auth::check())
<div class="w-100"
    style="height: 30vh !important; background-image: url({{ asset('img/foto/meet3.jpg') }}); background-size: cover; background-position: center;">
    <div class="w-100 row align-items-center m-0 p-0" style="background-color: rgba(90, 47, 112, 0.5); height: 30vh">
        <div class="col justify-content-center text-center">
            <h1 class=" text-white font-weight-bold">
                Yuk Tingkatkan Kinerja Kita!
            </h1>
            <h4 class=" text-white align-items-center my-3">
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                It has survived not only five centuries, but also the leap into electronic typesetting.
            </h4>
            <a href="" class="btn btn-info py-3 px-5">
                <h4 class=" font-weight-bold m-0">
                    Daftar
                </h4>
            </a>
        </div>
    </div>
</div>
@endif

<!-- Footer -->
<footer class="text-lg-start bg-light2 pt-3 text-muted position-relative">
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="border-bottom w-75 m-auto">
    <div class="container text-left text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <img src="{{ asset('img/logo/main-logo.png') }}" alt="" width="200">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h4 class="font-weight-bold text-info mb-4">
                    Guru Inovatif
                </h4>
                <p>
                    <a href="#!" class="text-reset">About Us</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Assessment</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Article</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">FAQ</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h4 class="font-weight-bold text-info mb-4">
                    Assessment
                </h4>
                <p>
                    <a href="#!" class="text-reset">Survey</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Training</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h4 class="font-weight-bold text-info mb-4">
                    Contact Us
                </h4>
                {{-- <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> --}}
                <p>
                    <a href="#!" class="text-reset">Lorem</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Lorem</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Lorem</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Lorem</a>
                </p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4">
    Copyright © 2021. 
    <a class="text-reset fw-bold" href="">Perilaku Inovatif All rights reserved</a>
</div>
<!-- Copyright -->
<img src="{{ asset('img/assets/ilustrasi guru.png') }}" alt="" class="position-absolute" width="225" style="right: 0; top: 0;">
</footer>
<!-- Footer -->