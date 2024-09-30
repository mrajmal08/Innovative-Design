@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/interiordesigner.css') }}">
@endpush
@section('content')

    <div class="all-content">

        <!-- navbar -->
        @include('layouts.navbar')
        <!-- navbar end -->

        <div class="profile-container">
            @foreach ($users as $item)
            <div class="profile-card">
            <img src="{{ asset('assets/image/designers/' . $item->image) }}" alt="image1" class="profile-icon" />
              <div class="profile-name">{{ $item->name }}</div>
              <div class="profile-position">{{ $item->specialization }}</div>
              <a href="{{ route('designer.detail', $item->id) }}" class="button">Connect</a>
            </div><br>
            @endforeach
          </div>
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
          <br>

          <a href="{{ route('term_condition') }}"><h4>Terms and Conditions</h4></a>
        </div>
        <div class="copyright text-center">
            &copy; ©2024  <strong>PROJECT WORK</strong> |All Rights Reserved
        </div>
      </footer>
      <!-- footer -->

      <a href="#" class="arrow"><i><img src="image/up-arrow.png" alt="" width="50px"></i></a>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

@endsection
