<div class="side-bar smallBar">
    <button class="close-sidebar">
        <i class="fa-regular fa-circle-xmark"></i>
    </button>

    <div class="logo-area">
        <a href="{{ route('index') }}" >
            <img src="{{ asset('assets/vendor/images/logo.png') }}" alt="">
        </a>
    </div>
    <ul class="p-0 m-0 sidebar-ul">
        <li>
            <a href="{{ route('vendor.dashboard') }}" class="{{ request()->is('vendor/dashboard') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img1.png') }}" alt="">
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.profile') }}" class="{{ request()->is('vendor/profile') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img2.png') }}" alt="">
                    <span>Profile</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.listings') }}" class="{{ request()->is('vendor/listing') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img3.png') }}" alt="">
                    <span>Listing</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.leads') }}" class="{{ request()->is('vendor/leads') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img4.png') }}" alt="">
                    <span>Leads</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.appointments') }}" class="{{ request()->is('vendor/appointments') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img4.png') }}" alt="">
                    <span>Appointments</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.marketing.plans') }}" class="{{ request()->is('vendor/marketing-plans') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img5.png') }}" alt="">
                    <span>Marketing Plans</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.subscription.plans') }}" class="{{ request()->is('vendor/subscription-plans') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img6.png') }}" alt="">
                    <span>Subscription Plans</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.analytics') }}" class="{{ request()->is('vendor/analytics') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img7.png') }}" alt="">
                    <span>Analytics</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.invoices') }}" class="{{ request()->is('vendor/invoices') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img8.png') }}" alt="">
                    <span>Invoices</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('vendor.co.op') }}" class="{{ request()->is('vendor/co-op') ? 'active' : '' }}">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img9.png') }}" alt="">
                    <span>Co-Op</span>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="icon-text">
                    <img src="{{ asset('assets/vendor/images/side-bar-img10.png') }}" alt="">
                    <span>Logout</span>
                </div>
            </a>
        </li>

    </ul>
</div>
