
@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/privacy.css') }}">
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
                    <li data-tc="tab_item_1" class="active">Privacy policy</li>
                    <li data-tc="tab_item_2">Information we collect</li>
                    <li data-tc="tab_item_3">use of information
                   </li>
                    <li data-tc="tab_item_4">Disclosure of Information</li>
                    <li data-tc="tab_item_5">security</li>
                    <li data-tc="tab_item_6">Your Choices</li>
                    <li data-tc="tab_item_7">Third-Party Websites</li>
                  </ul>
                </div>
                <div class="tabs_content">
                   <div class="tab_head">
                     <h2>Privacy policy</h2>
                   </div>
                   <div class="tab_body">
                     <div class="tab_item tab_item_1">
                         <h3>privacy policy</h3>
                         <p>Last Updated: [2024]<br>

         Thank you for visiting our Innovative Design  website ("Website").
         We are committed to protecting your privacy and providing a safe and secure environment for all users.
         This Privacy Policy outlines how we collect, use, disclose, and protect your personal information when you interact with our Website.
         Please read this policy carefully to understand our practices regarding your personal data.</p>
                     </div>
                     <div class="tab_item tab_item_2" style="display: none;">
                         <h3>information we collect</h3>
                         <h3>personal information</h3>
                       <p>We may collect personal information that you voluntarily provide to us when you use our Website.
                         This information may include your name, email address, contact information, and any other information you choose to provide.</p>
                         <h3>Non-perssonel Information</h3>
                         <p>We may also collect non-personal information automatically as you navigate through the Website.
                           This information may include your IP address, browser type, operating system, referring URLs, and other technical information.
                           </p>

                     </div>

                     <div class="tab_item tab_item_3"  style="display: none;">
                         <h3>Use of Information</h3>
                         <h3>personal information</h3>
                         <p>We may use the personal information you provide to us for the following purposes:

                           - To create and manage your user account
                           - To respond to your inquiries and provide you with information and services
                           - To personalize and improve your experience on our Website
                           - To send you updates, newsletters, and other relevant communications
                           - To facilitate user interactions, such as comments and stories upload
                           - To comply with legal obligations</p>
                           <h3>Non personal information</h3>
                       <p>We may use non-personal information to analyze trends, administer the Website, track users' movements, and gather demographic information for aggregate use.
                         This information is used to improve the overall user experience and optimize our services.
                        </p>
                     </div>
                     <div class="tab_item tab_item_4"  style="display: none;">
                         <h3> Disclosure of Information
                         </h3>
                         <h3> Service Providers:</h3> <p>We may engage trusted third-party service providers to assist us in operating our Website and providing services to you. These service providers may have access to your personal information but are obligated to keep it confidential and use it only for the purposes specified by us.</p>
                    <h3>Legal Requirements</h3>
                    <p>We may disclose your personal information if required to do so by law or in response to valid requests from public authorities (e.g., court orders or government agencies).</p>
                     <h3>Aggregate Information</h3>
                     <p>We may share aggregated demographic and statistical information with third parties.
                       This information does not contain any personal information that can identify individual users.
                      </p>



                    <div class="tab_item tab_item_5"  style="display: none;">
                         <h3>Security</h3>
                       <p>
                         We have implemented reasonable security measures to protect the personal information we collect and store. However, please be aware that no method of transmission over the internet or electronic storage is 100% secure.
                          We cannot guarantee absolute security, and any transmission of information is at your own risk.
                         </p>
                     </div>

                     <div class="tab_item tab_item_6"  style="display: none;">
                       <h3>Your Choices</h3>
                     <p>
                       You have the right to access, update, and correct your personal information. You may also choose to opt-out of receiving certain communications from us.
                       Please contact us using the information provided at the end of this Privacy Policy to exercise your rights.

                       </p>
                   </div>

                   <div class="tab_item tab_item_7"  style="display: none;">
                     <h3>Third-Party Websites</h3>
                   <p>
                     Our Website may contain links to third-party websites. We are not responsible for the privacy practices or the content of such websites.
                     We encourage you to read the privacy policies of those websites when you visit them.

                     </p>
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
