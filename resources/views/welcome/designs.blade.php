@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/home/index.css') }}">
<style>
    .wish-btn {
        margin-top: 20px;
        padding: 10px 15px;
        background: #C08B5C;
        color: white;
        border: rgba(161, 109, 14, 1);
        border-radius: 5px;
        cursor: pointer;
        gap: 25px;
        transition: 0.3s ease;
        text-decoration: none;
    }

    .wish-btn:hover {
        background: #ffcea2;
        color: #ffffff;
        text-decoration: none;

    }

    .modal {
        z-index: 1050;
    }

    .modal-backdrop {
        z-index: 1040;
    }
</style>
@endpush
@section('content')


<div class="all-content">

    <!-- navbar -->
    @include('layouts.navbar')
    <!-- navbar end -->

    <header>
        @if($design)
            @if ($design[0]->cat_id == 1)
            <h1>Living Room Designs</h1>
            @endif
            @if ($design[0]->cat_id == 2)
            <h1>Bed Room Designs</h1>
            @endif
            @if ($design[0]->cat_id == 3)
            <h1>Kitchen Designs</h1>
            @endif
            @if ($design[0]->cat_id == 5)
            <h1>Dining Room Designs</h1>
            @endif
            @if ($design[0]->cat_id == 4)
            <h1>Office Designs</h1>
            @endif
            @if ($design[0]->cat_id == 6)
            <h1>Bath Room Designs</h1>
            @endif
        @endif
        <nav>
            <ul>
                <li><a href="{{ route('welcome') }}">Back to Portfolio</a></li>
                <li><a href="{{ route('wishlist') }}">View Wishlist</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="gallery">
            @foreach ($design as $item)

            <div class="gallery-item">
                <img src="{{ asset('assets/image/designs') . '/' . $item->image }}" alt="Living Room " class="popup-img" width="450" height="300">
                <button type="button" data-toggle="modal" data-target="#exampleModal{{$item->id}}">Send to Designer</button>
                <a type="button" class="wish-btn" href="{{ route('add_to_wishlist', $item->id) }}">Add to Wishlist</a>
            </div>
            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('assign.design') }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Send this design to the designer</h5>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="design_id" value="{{ $item->id }}" />
                                <select for="designers" class="form-control" name="assignee">
                                    <option selected disabled> -- select one --</option>
                                    @foreach ($designers as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }} - {{ $row->skills }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Popup Container -->
            <div id="popup" class="popup">
                <span class="close">&times;</span>
                <img class="popup-content" id="popup-image">
            </div>

            <!-- Add more designs as needed -->
        </div>
    </main>
    <script src="{{ asset('assets/js/index.js') }}"></script>
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

    <a href="#" class="arrow"><i><img src="{{ asset('assets/image/up-arrow.png') }}" alt="" width="50px"></i></a>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
