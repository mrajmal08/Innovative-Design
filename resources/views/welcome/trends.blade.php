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

            @foreach ($design->where('cat_id', 1) as $item)
            <a href="{{ asset('assets/image/designs/' . $item->image) }}" class="image Living-room">
                <img src="{{ asset('assets/image/designs/' . $item->image) }}" class="img-fluid" alt="">
            </a>
            @endforeach
            @foreach ($design->where('cat_id', 2) as $item)
            <a href="{{ asset('assets/image/designs/' . $item->image) }}" class="image Bed-room">
                <img src="{{ asset('assets/image/designs/' . $item->image) }}" alt="">
            </a>
            @endforeach
            @foreach ($design->where('cat_id', 3) as $item)
            <a href="{{ asset('assets/image/designs/' . $item->image) }}" class="image Kitchen">
                <img src="{{ asset('assets/image/designs/' . $item->image) }}" alt="">
            </a>
            @endforeach

            @foreach ($design->where('cat_id', 4) as $item)
            <a href="{{ asset('assets/image/designs/' . $item->image) }}" class="image officeroom">
                <img src="{{ asset('assets/image/designs/' . $item->image) }}" alt="">
            </a>
            @endforeach
            @foreach ($design->where('cat_id', 5) as $item)
            <a href="{{ asset('assets/image/designs/' . $item->image) }}" class="image Dinning">
                <img src="{{ asset('assets/image/designs/' . $item->image) }}" alt="">
            </a>
            @endforeach
            @foreach ($design->where('cat_id', 6) as $item)
            <a href="{{ asset('assets/image/designs/' . $item->image) }}" class="image BathRoom">
                <img src="{{ asset('assets/image/designs/' . $item->image) }}" alt="">
            </a>
            @endforeach
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

            <a href="{{ route('term_condition') }}">
                <h4>Terms and Conditions</h4>
            </a>
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
