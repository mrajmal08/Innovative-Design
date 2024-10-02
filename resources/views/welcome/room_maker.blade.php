@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/makeover.css') }}">
@endpush
@section('content')


    <div class="all-content">

        <!-- navbar -->
        @include('layouts.navbar')
        <!-- navbar end -->

        <!-- gallary -->
        <section id="gallary" data-aos="fade-up"
            data-aos-duration="1500">
            <div class="container">
                <h1>ROOM MAKEOVER</h1>

                <div class="row" style="margin-top: 30px;">
                @foreach ($makeover as $item )
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <div class="overlay">
                            </div>
                            <img src="{{ asset('assets/image/designs') . '/' . $item->image }}" class="popup-img" alt="" width="350" height="300">
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- gallary -->
        <!-- footer -->
         <div id="popup" class="popup">
                <span class="close">&times;</span>
                <img class="popup-content" id="popup-image">
            </div>
        <script src="{{ asset('assets/js/index.js') }}"></script>

        <footer id="footer" data-aos="fade-up"
            data-aos-duration="1500">
            <h1 class="text-center">Innovative Design</h1>

            <div class="icons text-center">
                <i class="bx bxl-twitter"></i>
                <i class="bx bxl-facebook"></i>
                <i class="bx bxl-linkedin"></i>
                <i class="bx bxl-instagram"></i>
            </div>

            <div class="credite text-center">
            <a href="{{ route('privacy_policy') }}"><span>Privacy policies</span></a>
                <br>

                <a href="{{ route('term_condition') }}"><h4>Terms and Conditions</h4></a>
            </div>
            <div class="copyright text-center">
                &copy; ©2024 <strong>PROJECT WORK</strong> |All Rights Reserved
            </div>
        </footer>
        <!-- footer -->

        <a href="#" class="arrow"><i><img src="{{ asset('assets/image/up-arrow.png') }}" alt="" width="50px"></i></a>

    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

@endsection
