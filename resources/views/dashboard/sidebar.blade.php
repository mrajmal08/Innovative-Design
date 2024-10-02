<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <nav class="mt-2">
            <h3 class="nav-header">Innovative Design</h3>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p class="text">Dashboard</p>
                    </a>
                </li>
                @if (auth()->user()->role_id == 1)
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Designers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('visitor.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-primary"></i>
                        <p class="text">Visitors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('design.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p class="text">Designs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('makeover.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-primary"></i>
                        <p class="text">Room Makeover</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('assign.tasks') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-secondary"></i>
                        <p class="text">My Tasks</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('reported.tasks') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-success"></i>
                        <p class="text">My Reported Tasks</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact_us.details') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p class="text">Contact US</p>
                    </a>
                </li>

                @endif

                @if (auth()->user()->role_id == 2)
                <li class="nav-item">
                    <a href="{{ route('assign.tasks') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-secondary"></i>
                        <p class="text">My Tasks</p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role_id == 3)
                <li class="nav-item">
                    <a href="{{ route('reported.tasks') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-success"></i>
                        <p class="text">My Reported Tasks</p>
                    </a>
                </li>
                @endif

                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p class="text">Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </nav>
    </div>
</aside>
