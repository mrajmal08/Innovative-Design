@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/term.css') }}">
@endpush
@section('content')
  <div class="all-content">

    <!-- navbar -->
    @include('layouts.navbar')
    <!-- navbar end -->

<div class="wrapper flex_align_justify">
    <div class="tc_wrap">
        <div class="tabs_list">
          <ul>
            <li data-tc="tab_item_1" class="active">Terms of use</li>
            <li data-tc="tab_item_2">Intellectual property rights</li>
            <li data-tc="tab_item_3">Prohibited activities</li>
            <li data-tc="tab_item_4">Termination clause</li>
            <li data-tc="tab_item_5">Governing law</li>
          </ul>
        </div>
        <div class="tabs_content">
           <div class="tab_head">
             <h2>Terms & Conditions</h2>
           </div>
           <div class="tab_body">
             <div class="tab_item tab_item_1">
                 <h3>Terms of use</h3>
                 <p>Last Updated: [Date]

                   Welcome to our Innovative Design website ("Website"). These Terms of Service ("Terms") govern your access to and use of the Website. By accessing or using the Website, you agree to be bound by these Terms. If you do not agree with any part of these Terms, please do not use the Website.</p>
               <p>You must be at least 18 years old or the legal age of majority in your jurisdiction to use the Website. By using the Website, you represent and warrant that you meet the eligibility requirements.</p>
               <p>Certain features of the Website may require you to create a user account. You are responsible for maintaining the confidentiality of your account credentials and are solely responsible for all activities that occur under your account. You agree to provide accurate and complete information when creating an account and to promptly update any changes to your information.</p>
               <p></p><p>We provide Innovative design services, including but not limited to consultations, space planning, color schemes, furniture selection, and implementation ("Services"). Detailed descriptions of our Services are available on our Website.</p>
             </div>
             <div class="tab_item tab_item_2" style="display: none;">
                 <h3>Intellectual property rights</h3>
               <p>The Website and its content, including but not limited to text, graphics, logos, images, and software, are protected by intellectual property laws and are owned or licensed by us.
                  You agree not to reproduce, modify, distribute, display, or create derivative works based on the Website or its content without our prior written permission.
                  Labore, aliquam iste. A quasi ut accusantium laboriosam eius sequi?</p>
             </div>

             <div class="tab_item tab_item_3"  style="display: none;">
                 <h3>Prohibited activities</h3>
                 <p>You agree not to:

                   Use the Website for any illegal, unauthorized, or prohibited purpose.
                   Interfere with or disrupt the Website or its servers, networks, or infrastructure.
                   Engage in any activity that could damage, disable, or impair the Website's functionality or interfere with other users' access to the Website.
                   Upload, post, or transmit any content that is unlawful, harmful, defamatory, obscene, infringing, or otherwise objectionable.
                   Violate any applicable laws, regulations, or third-party rights.</p>
               <p></p>
             </div>
             <div class="tab_item tab_item_4"  style="display: none;">
                 <h3>Modification of Terms</h3>
               <p>We reserve the right to modify or update these Terms at any time without prior notice. Any changes to the Terms will be effective immediately upon posting. Your continued use of the Website after the posting of changes constitutes your acceptance of such changes.</p>
             <div class="tab_item tab_item_5"  style="display: none;">
                 <h3>Governing law</h3>
               <p>These Terms shall be governed by and construed in accordance with the laws of [Jurisdiction]. Any disputes arising out of or relating to these Terms or the use of the Website shall be subject to the exclusive jurisdiction of the courts of [Jurisdiction].</p>
             </div>
           </div>

        </div>
    </div>
 </div>

 <script>var tab_lists = document.querySelectorAll(".tabs_list ul li");
   var tab_items = document.querySelectorAll(".tab_item");

   tab_lists.forEach(function(list){
     list.addEventListener("click", function(){
       var tab_data = list.getAttribute("data-tc");

       tab_lists.forEach(function(list){
         list.classList.remove("active");
       });
       list.classList.add("active");

       tab_items.forEach(function(item){
         var tab_class = item.getAttribute("class").split(" ");
         if(tab_class.includes(tab_data)){
           item.style.display = "block";
         }
         else{
           item.style.display = "none";
         }

       })

     })
   })</script>

@endsection
