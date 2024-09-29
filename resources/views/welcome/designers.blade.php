@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/interiordesigner.css') }}">
@endpush
@section('content')

    <div class="all-content">

        <!-- navbar -->
        @include('layouts.navbar')
            <!-- Brand -->
            <a class="navbar-brand" href="#" id="logo"><img src="image/logo.png.gif" alt="" width="50px">Innovative Design</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span><img src="./image/menu.png" alt="" width="30px"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="home.html">Home</a>
                </li>
                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                     Design Portfolio
                    </a>
                    <div class="dropdown-menu">
                        <a href="livingroom.html" class="dropdown-item">Living Room</a>
                        <a href="badroom.html" class="dropdown-item">Bed Room</a>
                        <a href="kitchen.html" class="dropdown-item">Kitchen Design</a>
                        <a href="Dining.html" class="dropdown-item">Dining Room</a>
                        <a href="office.html" class="dropdown-item">Office Room</a>
                        <a href="bathroom.html" class="dropdown-item">Bath Room</a>
                    </div>
                </li>
                <!-- dropdown -->
                 <!-- dropdown -->
                 <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                     Designer Profile
                    </a>
                    <div class="dropdown-menu">
                      <a href="interiordesigner.html" class="dropdown-item">Name</a>
                      <a href="hello.html" class="dropdown-item">Contact Information</a>
                      <a href="login.html" class="dropdown-item">Login Form</a>
                    </div>
                </li>
                <!-- dropdown -->
                 <!-- dropdown -->
                 <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                     Blog/Articles
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">New trends in Design</a>
                        <a href="#" class="dropdown-item">Choose the Rights Fabric</a>
                        <a href="#" class="dropdown-item"> 3D Vedio</a>
                        <a href="#" class="dropdown-item">Room Makeover</a>
                    </div>
                </li>
                <!-- dropdown -->
                 <!-- dropdown -->
                 <li class="nav-item dropdown">
                    <a href="about.html" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                     About Us
                    </a>
                    <div class="dropdown-menu">
                        <a href="about.html" class="dropdown-item">About</a>
                        <a href="feedback.html" class="dropdown-item">Feedback</a>
                    </div>
                </li>
                <!-- dropdown -->
                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                     Help
                    </a>
                    <div class="dropdown-menu">
                        <a href="FQS.html" class="dropdown-item">FAQ,s</a>
                </li>
                <!-- dropdown -->
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                  <!-- dropdown -->

                <!-- dropdown -->
              </ul>
            </div>
            <div class="icons">
                <img src="" alt="" width="20px">
                <img src="" alt="" width="20px">
                <img src="" alt="" width="24px">
            </div>
          </nav>
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
