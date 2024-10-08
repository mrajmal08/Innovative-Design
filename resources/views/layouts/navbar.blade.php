<nav class="navbar navbar-expand-md" id="navbar">
    <!-- Brand -->
    <a class="navbar-brand" href="{{ route('welcome') }}" id="logo"><img src="{{ asset('assets/image/logo.png.gif') }}" alt="" width="50px">Innovative Design</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span><img src="{{ asset('assets/image/menu.png') }}" alt="" width="30px"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}">Home</a>
            </li>
            <!-- dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    Design Portfolio
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('designs', 1) }}" class="dropdown-item">Living Room</a>
                    <a href="{{ route('designs', 2) }}" class="dropdown-item">Bed Room</a>
                    <a href="{{ route('designs', 3) }}" class="dropdown-item">Kitchen Design</a>
                    <a href="{{ route('designs', 5) }}" class="dropdown-item">Dining Room</a>
                    <a href="{{ route('designs', 4) }}" class="dropdown-item">Office Room</a>
                    <a href="{{ route('designs', 6) }}" class="dropdown-item">Bath Room</a>
                </div>
            </li>
            <!-- dropdown -->
            <!-- dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    Designer Profile
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('designers') }}" class="dropdown-item">Designers</a>
                </div>
            </li>
            <!-- dropdown -->
            <!-- dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    Blog/Articles
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('trends') }}" class="dropdown-item">New trends in Design</a>
                    <a href="{{ route('videos') }}" class="dropdown-item">Home Vedio</a>
                    <a href="{{ route('room_maker') }}" class="dropdown-item">Room Makeover</a>
                </div>
            </li>
            <!-- dropdown -->
            <!-- dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    About Us
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('about_us') }}" class="dropdown-item">About</a>
                    <a href="{{ route('privacy_policy') }}" class="dropdown-item">Privacy policies</a>
                </div>
            </li>
            <!-- dropdown -->
            <!-- dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    Help
                </a>
                <div class="dropdown-menu">
                    <a href="{{  route('faq') }}" class="dropdown-item">FAQ,s</a>
            </li>
            <!-- dropdown -->
            <!-- dropdown -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a>
            </li>
            <!-- dropdown -->
        </ul>
    </div>
    <!-- Search Icon -->
    <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('home') }}">
                    Dashboard
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </li>
        @endguest
    </ul>
    <div class="icons">
        <img src="" alt="" width="20px">
        <img src="" alt="" width="20px">
        <img src="" alt="" width="24px">
    </div>
</nav>
