@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/muhammad.css') }}">
@endpush
@section('content')


<div class="all-content">

    <!-- navbar -->
    @include('layouts.navbar')
    <!-- navbar end -->

    <div class="container">
        <div class="profile">
            <img src="{{ asset('assets/image/designers/' . $designer->image) }}" alt="Designer Image" class="profile-img">
            <div class="info">
                <h2>{{ $designer->name }}</h2>
                <p><strong>Location : </strong> {{ $designer->city }}, {{ $designer->country }} </p>
                <p><strong>Specialization : </strong>{{ $designer->specialization }}</p>
                <p><strong>Skills : </strong> {{ $designer->skills }}</p>
            </div>
        </div>

        @if (auth()->user())
            <div class="contact">
            <p><strong>Contact : {{ $designer->phone_no }}
            <p>Email : <a href="rimsha.mehmood8@gmail.com">{{ $designer->email }}</a></p>
        </div>
        @else
        <div class="contact">
            <a href="{{ route('show_details') }}"><strong>Show Contact Details </strong></a>
        </div>
        @endif


        <div class="feedback">
            <h3>Leave Feedback</h3>
            <form method="POST" action="{{ route('feedback') }}">
                @csrf
                <textarea id="feedback-box" name="feedback" placeholder="Write your feedback here..." rows="5"></textarea>
                <input type="hidden" name="assignee" value="{{ $designer->id }}" />
                <button type="submit" id="send-feedback">
                    Send
                </button>
            </form>
            <div>
                @foreach ($designer->feedbacks as $feedback)
                <p id="feedback-response" style="margin-bottom: 0px;">{{ $feedback->feedback }}</p>
                @php
                $reporter = App\Models\User::select('name', 'created_at')->where('id', $feedback->reporter)->first();
                @endphp

                @if ($reporter)
                <span>{{ $reporter->name }} - {{ $reporter->created_at->format('Y-m-d') }}</span>
                @endif
                @endforeach
            </div>

        </div>
    </div>

    <script src="muhammad.js"></script>
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
            &copy; 2024 <strong>PROJECT WORK</strong> |All Rights Reserved
        </div>
    </footer>
    <!-- footer -->

    <a href="#" class="arrow"><i><img src="image/up-arrow.png" alt="" width="50px"></i></a>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>

@endsection
