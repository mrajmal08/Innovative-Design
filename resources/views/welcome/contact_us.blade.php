@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/contact.css') }}">
@endpush
@section('content')


    <div class="all-content">
        <!-- navbar -->
        @include('layouts.navbar')
        <!-- navbar end -->

      <!-- contact  -->
      <div class="container" id="contact"    data-aos="fade-up"
      data-aos-duration="1500">
        <h1>CONTACT US</h1>
        <div class="row">
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="text" class="form-control" id="usr" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="email" class="form-control" id="eml" placeholder="Email">
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="number" class="form-control" id="phn" placeholder="Phone">
                </div>
            </div>

        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
        </div>
        <div id="messagebtn"><button>Send Message</button></div>
      </div>
      <!-- contact end -->


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

      <a href="#" class="arrow"><i><img src="{{ asset('assets/image/up-arrow.png') }}" alt="" width="50px"></i></a>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
@endsection

