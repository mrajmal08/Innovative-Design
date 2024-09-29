@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/style6.css') }}">
@endpush
@section('content')

<div class="all-content">

    <!-- navbar -->
    @include('layouts.navbar')
    <!-- navbar end -->

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Main video -->
                    <div class="video-wrapper mb-4">
                        <video id="mainVideo" controls width="100%" height="auto">
                            <source src="{{ asset('assets/image/blog/vedio (1).mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Two small videos below -->
                <div class="col-md-6">
                    <div class="video-wrapper mb-4">
                        <video id="video2" controls width="100%" height="auto">
                            <source src="{{ asset('assets/image/blog/vedio.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-wrapper mb-4">
                        <video id="video3" controls width="100%" height="auto">
                            <source src="{{ asset('assets/image/blog/vedio (2).mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

</div>

<!-- JavaScript to pause videos -->
<script>
    const videos = document.querySelectorAll('video');

    videos.forEach(video => {
        video.addEventListener('play', () => {
            videos.forEach(v => {
                if (v !== video) {
                    v.pause();
                }
            });
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

<a href="#" class="arrow"><i><img src="{{ asset('assets/image/up-arrow.png') }}" alt="" width="50px"></i></a>

</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

@endsection
