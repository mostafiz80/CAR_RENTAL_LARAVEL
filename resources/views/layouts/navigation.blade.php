<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="{{ route('home') }}"> <img src="{{ asset('assets/images/logo-light.png') }}"
                    class="logo-img" alt="">
            </a>
            <!-- <a class="logo" href="index.html"><h2>Renta<span>x</span></h2></a> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"> <a class="nav-link" href="{{ route('home') }}">Home </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('carslisting') }}">Browse Cars </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                @if (Auth::check())
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">{{ Auth::user()->name }} <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><small>{{ Auth::user()->name }}</small></li>
                            <li><small>Role: ({{ Auth::user()->role }})</small></li>
                            <li><a href="{{ route('customer.dashboard') }}" class="dropdown-item"><span>My
                                        Dashboard</span></a></li>
                            <li><a href="{{ route('customer.dashboard') }}" class="dropdown-item"><span>Edit
                                        Profile</span></a></li>
                            <li><a href="{{ route('booking.history') }}" class="dropdown-item"><span>Manage
                                        Bookings</span></a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <div class="navbar-right">
                <div class="wrap">
                    @if (Auth::check())
                    @else
                        <a href="{{ route('login') }}" class="button-1 mt-5 mb-5">Login </a>&nbsp;
                        <a href="{{ route('register') }}" class="button-1 mt-5 mb-5">Register </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
