@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/styleFQS.css') }}">
@endpush
@section('content')


    <div class="all-content">
        <!-- navbar -->
        @include('layouts.navbar')
        <!-- navbar end -->

        <span class="content">
            <h3>FAQs</h3>
        </span>
            <div class="accordion">

                <div class="accordion-content">
                    <header>
                        <span class="title">What services do you offer?</span>
                        <i class="fa-solid fa-plus"></i>
                    </header>

                    <p class="description">
                      We offer a range of Innovative design services, including space planning, color consultation, choosing the right fabric, 3D image/vedio, and custom decor. We also provide project management for full home or office renovations.</p>
                </div>

                <div class="accordion-content">
                    <header>
                        <span class="title"></span>
                        <span class="title"> Do you provide  image/vedio or visualizations?</span>
                        <i class="fa-solid fa-plus"></i>
                    </header>

                    <p class="description">
                      Yes, we offer  renderings and visualizations to help you envision the final design. These tools allow you to see how different elements will look together and make informed decisions.
                       </p>
                </div>
                <div class="accordion-content">
                    <header>
                        <span class="title">What are the benefits of hiring an interior designer?</span>
                        <i class="fa-solid fa-plus"></i>
                    </header>

                    <p class="description">
                      Hiring an interior designer can save you time, money, and stress. We bring expertise in creating functional and beautiful spaces, can help avoid costly mistakes, and have access to exclusive resources and products.
                        </p>
                </div>
                <div class="accordion-content">
                    <header>
                        <span class="title">Do you offer commercial interior design services?</span>
                        <i class="fa-solid fa-plus"></i>
                    </header>

                    <p class="description">
                      Yes, we provide interior design services for commercial spaces, including offices, Living rooms, bad rooms, dining room, and more. We focus on creating environments that are functional, inviting, and reflective of your brand.
                      </p>
                </div>
                <div class="accordion-content">
                  <header>
                      <span class="title">What is the difference between interior design and interior decorating?</span>
                      <i class="fa-solid fa-plus"></i>
                  </header>

                  <p class="description">
                    Interior design involves creating functional and aesthetically pleasing spaces through planning, designing, and managing projects. It often includes structural changes, space planning, and the integration of architecture and building systems. Interior decorating, on the other hand, focuses on the aesthetic aspects such as selecting colors, furniture, and accessories.
                    </p>
              </div>

        </div>

            <script> const accordionContent = document.querySelectorAll(".accordion-content");

              accordionContent.forEach((item, index) => {
                  let header = item.querySelector("header");
                  header.addEventListener("click", () =>{
                      item.classList.toggle("open");

                      let description = item.querySelector(".description");
                      if(item.classList.contains("open")){
                          description.style.height = `${description.scrollHeight}px`; //scrollHeight property returns the height of an element including padding , but excluding borders, scrollbar or margin
                          item.querySelector("i").classList.replace("fa-plus", "fa-minus");
                      }else{
                          description.style.height = "0px";
                          item.querySelector("i").classList.replace("fa-minus", "fa-plus");
                      }
                      removeOpen(index); //calling the funtion and also passing the index number of the clicked header
                  })
              })

              function removeOpen(index1){
                  accordionContent.forEach((item2, index2) => {
                      if(index1 != index2){
                          item2.classList.remove("open");

                          let des = item2.querySelector(".description");
                          des.style.height = "0px";
                          item2.querySelector("i").classList.replace("fa-minus", "fa-plus");
                      }
                  })
              }</script>

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

