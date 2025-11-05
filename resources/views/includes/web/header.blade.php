<body>
    <div class="top-bar-wrapper">
        <div class="container">
            <div class="top-bar">
                <div class="top-bar-left">
                    <a href="mailto:anderson@theaapg.com"><i class="fa-solid fa-envelope"></i>anderson@theaapg.com</a>
                    <a href="tel:8165297022"><i class="fa-solid fa-phone"></i> 816-529-7022</a>
                </div>
                <div class="top-bar-right">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
    <header class="header-wrapper">
        <div class="container">
            <div class="col-lg-12">
                <div class="hdr-adz-img">
                    <img src="{{ asset('assets/web/images/hd-adz.png') }}" alt="">
                </div>
            </div>
            <div class="header">
                <div class="logo-wrapper position-relative">
                    <a href="index.php">
                        <img src="{{ asset('assets/web/images/logo.png') }}" alt="">
                    </a>
                </div>
                <ul class="nav-links m-0 p-0 " id="header-offcanva">
                    <li><a href="{{ route('index') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
                    <li><a href="{{ route('listings') }}" class="{{ (request()->is('listings') || request()->is('listing-detail'))  ? 'active' : '' }}">Listings</a></li>
                    <li><a href="{{ route('reviews') }}" class="{{ request()->is('reviews') ? 'active' : '' }}">Reviews</a></li>
                    <li><a href="{{ route('blogs') }}" class="{{ request()->is('blogs') ? 'active' : '' }}">Blogs</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                    <li><a class="hidden-links" href="#">Add Listing</a></li>
                    <li><a class="hidden-links" href="#">Become a Partner</a></li>
                </ul>
                <div class="listing-area">
                    <div class="search-box">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>

                    <div class="login-box">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="{{ asset('assets/web/images/login-img.png') }}" alt="">
                        </a>
                    </div>
                    <a href="#" class="listing-btn"><img src="{{ asset('assets/web/images/btn-Vector1.png') }}" alt=""> Add Listing</a>
                    <a href="#" class="listing-btn"><img src="{{ asset('assets/web/images/btn-Vector2.png') }}" alt=""> Become a
                        Partner</a>
                    <span class="none-line">|</span>
                    <div class="hamburger" id="menu-btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>

                {{-- Sign Up Modal --}}
                <div class="modal fade" id="exampleModal" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content p-0 border-0">
                            <div class="modal-bg" style="background-image: url('{{ asset('assets/web/images/login.png') }}');">
                                <div class="modal-overlay">

                                    <button type="button" class="close-modal" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        &times;
                                    </button>

                                    <div class="modal-box step-form">
                                        <div class="tab-buttons">
                                            <button class="tab-btn tab-btn-2 active" data-tab="customer">I am
                                                Customer</button>
                                            <button class="tab-btn tab-btn-vendor" data-tab="vendor">I am
                                                Vendor</button>
                                        </div>

                                        {{-- User Modal --}}
                                        <div class="tab-content" id="customer">
                                            <div class="left">
                                                <h2 class="welcome-hd">Welcome!</h2>
                                                <p class="welcome-hd-para">Enter your detail & Start journey with us</p>
                                                <button class="switch-btn custumar-btn" data-bs-toggle="modal" data-bs-target="#modalOverlayLogin">Login</button>
                                            </div>
                                            <div class="right">
                                                <h2 class="sing-up-hd-md text-center">Sign Up</h2>
                                                <div class="singup-icons">
                                                    <div class="singup-icon">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </div>
                                                    <div class="singup-icon">
                                                        <i class="fa-brands fa-google"></i>
                                                    </div>
                                                </div>
                                                <p class="account-para text-center">or use your account</p>
                                                <form id="register-form">
                                                    @csrf
                                                    <div class="input-wrapper">
                                                        <input type="email" name="email" placeholder="Email" />
                                                        <i class="fa-solid fa-user"></i>
                                                    </div>
                                                    <div class="input-wrapper">
                                                        <input type="password" name="password" id="user-password"  placeholder="Password" />
                                                        <i class="fa-solid fa-eye" id="userTogglePassword"></i>
                                                    </div>
                                                    <div class="input-wrapper">
                                                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                                            id="confirmPasswordInput" />
                                                        <i class="fa-solid fa-eye" id="togglePassword"></i>
                                                    </div>
                                                    <button class="submit-btn custumar-btn">Sign Up</button>
                                                </form>
                                            </div>
                                        </div>

                                        {{-- Vendor Modal --}}
                                        <div class="tab-content tab-content-22 d-none" id="vendor">
                                            <div class="right">
                                                <h2 class="sing-up-hd-md text-center">Sign Up</h2>
                                                <div class="singup-icons">
                                                    <div class="singup-icon">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </div>
                                                    <div class="singup-icon">
                                                        <i class="fa-brands fa-google"></i>
                                                    </div>
                                                </div>
                                                <p class="account-para text-center">or use your account</p>
                                                <div class="input-wrapper">
                                                    <input type="email" placeholder="Email">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                                <div class="input-wrapper">
                                                    <input type="password" id="vendor-password" placeholder="Password">
                                                    <i class="fa-solid fa-eye" id="vendorTogglePassword"></i>
                                                </div>
                                                <div class="input-wrapper">
                                                    <input type="password" placeholder="Confirm Password"
                                                        id="confirmPasswordInput3">
                                                    <i class="fa-solid fa-eye" id="togglePassword3"></i>
                                                </div>
                                                <button class="submit-btn custumar-btn">Sign Up</button>
                                            </div>
                                            <div class="left">
                                                <h2 class="welcome-hd">Welcome!</h2>
                                                <p class="welcome-hd-para">Enter your detail & Start journey with us</p>
                                                <button class="switch-btn custumar-btn" data-bs-toggle="modal" data-bs-target="#modalOverlayLogin">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
