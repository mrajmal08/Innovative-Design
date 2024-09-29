@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/style6.css') }}">
@endpush
@section('content')

<div class="all-content">

    <!-- navbar -->
    @include('layouts.navbar')
    <!-- navbar end -->

    <div class="gallery">
        <h1>TRENDING DESIGNS </h1>
        <ul class="controls">
            <li class="buttons active" data-filter="all">all</li>
            <li class="buttons" data-filter="Living-room">Living-room</li>
            <li class="buttons" data-filter="Bed-room">Bed-room</li>
            <li class="buttons" data-filter="Kitchen">Kitchen</li>
            <li class="buttons" data-filter="officeroom">officeroom</li>
            <li class="buttons" data-filter="Dinning">Dinning</li>
            <li class="buttons" data-filter="BathRoom">BathRoom</li>
        </ul>

        <div class="image-container">
            <a href="{{ asset('assets/image/blog/linh.png') }}" class="image Living-room">
                <img src="{{ asset('assets/image/blog/linh.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/living.png') }}" class="image Living-room">
                <img src="{{ asset('assets/image/blog/living.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/livi.png') }}" class="image Living-room">
                <img src="{{ asset('assets/image/blog/livi.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/living/living45.png') }}" class="image Living-room">
                <img src="{{ asset('assets/image/living/living45.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/bed.png') }}" class="image Bed-room">
                <img src="{{ asset('assets/image/blog/bed.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/bedroom.png') }}" class="image Bed-room">
                <img src="{{ asset('assets/image/blog/bedroom.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/bedroom/bedr5.png') }}" class="image Bed-room">
                <img src="{{ asset('assets/image/bedroom/bedr5.png') }}" alt="">
            </a>

            <a href="{{ asset('assets/image/blog/kit.png') }}" class="image Kitchen">
                <img src="{{ asset('assets/image/blog/kit.png') }}" alt="">
            </a>

            <a href="{{ asset('assets/image/blog/kitchen.png') }}" class="image Kitchen">
                <img src="{{ asset('assets/image/blog/kitchen.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/new.png') }}" class="image Kitchen">
                <img src="{{ asset('assets/image/blog/new.png') }}" alt="">
            </a>


            <a href="{{ asset('assets/image/blog/off.png') }}" class="image officeroom">
                <img src="{{ asset('assets/image/blog/off.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/office.png') }}" class="image officeroom">
                <img src="{{ asset('assets/image/blog/office.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/ofic.png') }}" class="image officeroom">
                <img src="{{ asset('assets/image/blog/ofic.png') }}" alt="">
            </a>

            <a href="{{ asset('assets/image/blog/din.png') }}" class="image Dinning">
                <img src="{{ asset('assets/image/blog/din.png') }}" alt="">
            </a>
            <a href="{{ asset('assets/image/blog/dining.png') }}" class="image Dinning">
                <img src="{{ asset('assets/image/blog/dining.png') }}" alt="">
                <a href="{{ asset('assets/image/shew.png') }}" class="image Dinning">
                    <img src="{{ asset('assets/image/shew.png') }}" alt="">
                </a>
                <a href="{{ asset('assets/image/blog/bath.png') }}" class="image BathRoom">
                    <img src="{{ asset('assets/image/blog/bath.png') }}" alt="">
                </a>
                <a href="{{ asset('assets/image/blog/bathr.png') }}" class="image BathRoom">
                    <img src="{{ asset('assets/image/blog/bathr.png') }}" alt="">
                </a>
                <a href="{{ asset('assets/image/bath/b3.png') }}" class="image BathRoom">
                    <img src="{{ asset('assets/image/bath/b3.png') }}" alt="">
                </a>


        </div>
    </div>


    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- magnific popup js cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.buttons').click(function() {

                $(this).addClass('active').siblings().removeClass('active');

                var filter = $(this).attr('data-filter')

                if (filter == 'all') {
                    $('.image').show(400);
                } else {
                    $('.image').not('.' + filter).hide(200);
                    $('.image').filter('.' + filter).show(400);
                }

            });

            $('.gallery').magnificPopup({

                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }

            });

        });
    </script>


    <!-- footer -->
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

    <a href="#" class="arrow"><i><img src="image/up-arrow.png') }}" alt="" width="50px"></i></a>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

@endsection
