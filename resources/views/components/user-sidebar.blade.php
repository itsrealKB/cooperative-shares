<div class="side-bar smallBar">
    <button class="close-sidebar">
        <i class="fa-regular fa-circle-xmark"></i>
    </button>

    <div class="logo-area">
        <a href="{{ route('user.dashboard') }}">
            <img src="{{ asset('assets/user/images/logo.png') }}" alt="">
        </a>
    </div>
    <ul class="p-0 m-0">
        <li>
            <a href="{{ route('user.dashboard') }}" class="{{ request()->is('user/dashboard') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/user/images/side-bar-img1.png') }}" alt="">
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user.profile') }}" class="{{ request()->is('user/profile') ? 'active' : '' }}">
                <i class="fa-solid fa-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.save.listing') }}" class="{{ request()->is('user/save-listing') ? 'active' : '' }}">
                <img src="{{ asset('assets/user/images/side-bar-img3.png') }}" alt="">
                <span>Save Listing</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.appointments') }}" class="{{ request()->is('user/appointments') ? 'active' : '' }}">
                <img src="{{ asset('assets/user/images/side-bar-img4.png') }}" alt="">
                <span>Appointments</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.property.map') }}" class="{{ request()->is('user/property-map') ? 'active' : '' }}">
                <img src="{{ asset('assets/user/images/side-bar-img5.png') }}" alt="">
                <span>Property Map</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.co.op') }}" class="{{ request()->is('user/co-op') ? 'active' : '' }}">
                <img src="{{ asset('assets/user/images/side-bar-img5.png') }}" alt="">
                <span>Co-Op</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('assets/user/images/side-bar-img6.png') }}" alt="">
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>

