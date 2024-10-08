@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/stylehome.css') }}">
@endpush
@section('content')

    <div class="all-content">
        <!-- navbar -->
       @include('layouts.navbar')
        <!-- navbar end -->

        <div class="home">
            <div class="content" data-aos="zoom-out-right">
                <h3>Innovative Design
                    <br>Creating Space that Inspire
                </h3>
                <h2>Category <span class="changecontent"></span></h2>
                <p>Making your home so beautiful, you'll never want to leave,
                    <br>Creating dreams for people who refuse to grow up.
                </p>

            </div>
            <div class="img" data-aos="zoom-out-left">
                <img src="{{ asset('assets/image/cla.png') }}" alt="">
            </div>

        </div>

        <!-- top cards -->
        <div class="container" id="box" data-aos="fade-up"
            data-aos-duration="1500">
            <div class="row">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="{{ asset('assets/image/der.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="{{ asset('assets/image/image2.png.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="{{ asset('assets/image/home1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- top cards end -->

        <!-- banner -->
        <div class="banner" data-aos="fade-up"
            data-aos-duration="1500">
            <div class="content">
                <h3>Modern Architecture</h3>
                <h2>Shapping the Future of Living</h2>
                <p>Quality Design must have a sense of Authenticity</p>
                <div id="btnorder"><button>View Now</button></div>
            </div>
            <div class="img">
                <img src="{{ asset('assets/image/image1.png') }}" alt="" width="330" height="380">
            </div>
        </div>
        <!-- banner end -->
        <div class="container-fluid">
            <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Services</span></h1>
            <hr class="mx-auto mb-5 w-30">
            <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <!-- card starts here -->
                    <div class="card shadow">
                        <img src="{{ asset('assets/image/design.png') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center"> Residential Design</h3>
                            <hr class="mx-auto w-75">
                            <p>
                                Residential design focuses on creating functional, comfortable, and aesthetically pleasing living spaces in homes. Residential design can cover areas like living rooms, bedrooms, kitchens, and bathrooms, as well as the overall flow and feel of the entire home. It involves planning the layout, choosing colors, furniture.
                            </p>

                        </div>
                    </div>
                    <!-- card ends here -->
                </div>
                <!-- col ends here -->
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <!-- card starts here -->
                    <div class="card shadow">
                        <img src="{{ asset('assets/image/image2.png.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center">Interior Design</h3>
                            <hr class="mx-auto w-75">
                            <p>
                                we concentrate on creating environments that suit personal tastes while being aesthetically pleasing and functionally sufficient. 3D interior renderings, 3D visualizations, virtual staging, and custom furniture design are all part of our interior design services in our website.Interior designers focus on balancing design.
                            </p>
                        </div>
                    </div>
                    <!-- card ends here -->
                </div>
                <!-- col ends here -->
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <!-- card starts here -->
                    <div class="card shadow">
                        <img src="{{ asset('assets/image/renova.jpg') }}" alt="" class="card-img-top" width="450" height="400">
                        <div class="card-body">
                            <h3 class="text-center">Home Renovation</h3>
                            <hr class="mx-auto w-75">
                            <p>
                                Home renovation means making improvements to your house.
                                It's about making your house better and more comfortable for you and your family to live in. We provide you with a range of creative design options to refresh your living spaces, from kitchens and bathrooms to bedrooms and Dining room.

                            </p>
                        </div>
                    </div>
                    <!-- card ends here -->
                </div>
                <!-- col ends here -->
                <div class="col-12 col-sm-6 col-md-3 m-auto">
                    <!-- card starts here -->
                    <div class="card shadow">
                        <img src="{{ asset('assets/image/3d-architectural-design.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="text-center">Architectural</h3>
                            <hr class="mx-auto w-75">
                            <p>
                                who provide architectural design services in Pakistan, We offer floor planning, and a wide range of architectural services in Pakistan.On our innovative design website, offering you a platform to explore and engage building designs. Whether you're planning a new project or renovating an existing space.
                            </p>
                        </div>
                    </div>
                    <!-- card ends here -->
                </div>
                <!-- col ends here -->
            </div>
        </div>


        <!-- Option 1: Bootstrap Bundle with Popper -->

        <!-- gallary -->
        <section id="gallary" data-aos="fade-up"
            data-aos-duration="1500">
            <div class="container">
                <h1>OUR GALLARY</h1>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                    <a href="{{ route('designs', 1) }}" class="card-link">
                        <div class="card">
                            <div class="overlay">
                                <h3 class="text-center">Living Room</h3>
                            </div>
                            <img src="{{ asset('assets/image/livi.png') }}" alt="" width="390" height="350">
                        </div>
                    </a>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                    <a href="{{ route('designs', 2) }}" class="card-link">
                        <div class="card">
                            <div class="overlay">
                                <h3 class="text-center">Bed Room</h3>
                            </div>
                            <img src="{{ asset('assets/image/bad2.png') }}" alt="" width="390" height="350">
                        </div>
                    </a>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                    <a href="{{ route('designs', 3) }}" class="card-link">
                        <div class="card">
                            <div class="overlay">
                                <h3 class="text-center">Kitchen Design</h3>
                            </div>
                            <img src="{{ asset('assets/image/kitcg.png') }}" alt="" width="390" height="350">
                        </div>
                    </a>
                    </div>
                </div>


                <div class="row" style="margin-top: 30px;" data-aos="fade-up"
                    data-aos-duration="1500">
                    <div class="col-md-4 py-3 py-md-0">
                    <a href="{{ route('designs', 5) }}" class="card-link">
                        <div class="card">
                            <div class="overlay">
                                <h3 class="text-center">Dining Room</h3>
                            </div>
                            <img src="{{ asset('assets/image/dis.png') }}" alt="" width="390" height="350">
                        </div>
                    </a>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                    <a href="{{ route('designs', 4) }}" class="card-link">
                        <div class="card">
                            <div class="overlay">
                                <h3 class="text-center">Office Room</h3>
                            </div>
                            <img src="{{ asset('assets/image/offic.png') }}" alt="" width="390" height="350">
                        </div>
                    </a>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                    <a href="{{ route('designs', 6) }}" class="card-link">
                        <div class="card">
                            <div class="overlay">
                                <h3 class="text-center">Bath Room</h3>
                            </div>
                            <img src="{{ asset('assets/image/bath.png') }}" alt="" width="390" height="350">
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallary -->
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
            </a>            </div>
            <div class="copyright text-center">
                &copy; 2024 <strong>PROJECT WORK</strong> |All Rights Reserved
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
