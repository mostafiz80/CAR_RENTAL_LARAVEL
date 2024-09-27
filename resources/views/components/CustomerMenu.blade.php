<div class="col-lg-4 col-md-12">
    <div class="sidebar-page">
        <div class="title">
            <h4>Welcome, {{ auth()->user()->name }}</h4>
        </div>
        <div class="item">
            <div class="features {{ request()->routeIs('customer.dashboard') ? 'active' : '' }}"><a
                    href="{{ route('customer.dashboard') }}"><span><i class="ti-arrow-top-right"></i> Edit
                        Profile</span></a></div>
            <div class="features {{ request()->routeIs('password.change') ? 'active' : '' }}"><a
                    href="{{ route('password.change') }}"><span><i class="ti-arrow-top-right"></i> Change
                        password</span></a></div>
            <div class="features {{ request()->routeIs('booking.history') ? 'active' : '' }}"><a
                    href="{{ route('booking.history') }}"><span><i class="ti-arrow-top-right"></i> Booking
                        History</span></a></div>

            <div class="features">
                <span>
                    <i class="ti-arrow-top-right"></i>
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="logout-link">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
