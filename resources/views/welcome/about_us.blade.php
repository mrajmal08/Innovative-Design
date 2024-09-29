@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/aboutus.css') }}">
@endpush
@section('content')
    <div class="all-content">
        <!-- navbar -->
        @include('layouts.navbar')
        <!-- navbar end -->

       <!--about-->

       <section class="about-us">
        <div class="about">
          <img src="{{ asset('assets/image/about us.png') }}" class="pic">
          <div class="text">
            <h2>About Us</h2>

              <p>Welcome to our Innovative design website, where creativity meets functionality. We specialize in crafting personalized spaces that not only look stunning but also align perfectly with your lifestyle. Whether you're dreaming of a cozy living room, a sophisticated office, or a complete home transformation, our experienced team is here to guide you every step of the way. We take the time to understand your unique taste, preferences, and the way you live, so we can design a space that feels truly yours. From selecting the perfect color palette to choosing furniture and decor, we focus on every detail to ensure a harmonious and balanced environment.</p>

            </div>
          </div>
        </div>
      </section>
   <!--about end-->

      <!-- footer -->
      <footer id="footer"    data-aos="fade-up"
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
         <a href="{{ route('term_condition') }}"><h4>Terms and Conditions</h4></a>
        </div>
        <div class="copyright text-center">
            &copy; ©2024  <strong>PROJECT WORK</strong> |All Rights Reserved
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

