@extends('layouts.vendor.app')

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">My Subscription</h1>
        <div class="media-boost-wrapper">
            <div class="media-boost">
                <p class="boost-para">Current Subscription (Standard)</p>
                <p class="boost-mini-para">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum <br> has been the industry's standard dummy text ever since the 1500s
                </p>
            </div>
            <div class="Monthly-Plan">
                <div class="montly-price-wrapper">
                    <div class="unique-price">$199</div>
                    <div>
                        <p class="boost-para">Monthly Plan</p>
                        <p class="boost-mini-para">Your subscription renews July 12th, 2025</p>
                        <a href="#" class="current-plan">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>


        <h1 class="dashboard-hd">Subscription Plans</h1>
        <div class="pricing-box-unique-wrapper">
            <div class="unique-pricing-box">
                <div class="unique-plan-header">BASIC</div>
                <div class="unique-price">$399</div>
                <div class="unique-per-user">Per User/Month</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Up to 5 Active Listings</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Standard Analytics</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Email Support</p>
                        </li>
                    </ul>
                </div>
                <button class="unique-upgrade-btn">UPGRADE NOW</button>
            </div>

            <div class="unique-pricing-box">
                <div class="unique-plan-header">ENHANCED</div>
                <div class="unique-price">$699</div>
                <div class="unique-per-user">Per User/Month</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Unlimited Listings</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">3 Featured Slots</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Advanced Analytics</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Lead Dashboard</p>
                        </li>
                    </ul>
                </div>
                <button class="unique-upgrade-btn">UPGRADE NOW</button>
            </div>

            <div class="unique-pricing-box">
                <div class="unique-plan-header">PREMIUM</div>
                <div class="unique-price">$999</div>
                <div class="unique-per-user">Per User/Month</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Unlimited Listings</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">5 Featured Slots</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Homepage Placement</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Priority Support</p>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para">Custom Co-op Page Design</p>
                        </li>
                    </ul>
                </div>
                <button class="unique-upgrade-btn">UPGRADE NOW</button>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- <script>
        $(".property-wrapper").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            prevArrow: ".prev",
            nextArrow: ".next",
            dots: false,
            autoplay: false,

        });
    </script> -->
@endpush
