@extends('layouts.web.app')

@push('styles')
    <style>
        label.error {
            color: #dc3545 !important;
        }
    </style>
@endpush

@php
    $page = 'special-page';
@endphp

@section('section')
    <section class="hero-banner">
        <div class="icon-box">
            <div class="line"></div>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="video-area position-relative">
            <div>
                <video src="{{ asset('assets/web/images/banner-video.mp4') }}" autoplay="true" muted="true" loop="true"
                    class="video1">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="banner-content-wrapper">
                <div class="banner-content-area text-center">
                    <img src="{{ asset('assets/web/images/play-img.png') }}" alt="" class="text-center">
                    <h1 class="banner-hd">Your Trusted Marketplace for <br>Cooperative
                        Housing Shares
                    </h1>
                    <p class="banner-para">Discover cooperative living communities on a trusted nationwide platform across
                        <br>
                        the USA. Explore cooperative housing communities near me for local options. Connect with boards,
                        <br>
                        vendors that are already registered, and ready buyers effortlessly.
                    </p>
                    <div class="banner-form-wrapper">
                        <form>
                            <div class="field-wrapper">
                                <label for="">Property Type</label>
                                <select>
                                    <option selected>Co-Op Share</option>
                                    <option selected>Co-Op Share</option>
                                </select>
                            </div>
                            <div class="field-wrapper">
                                <label for="">Rooms</label>
                                <input type="number" placeholder="Total Rooms">
                            </div>
                            <div class="field-wrapper">
                                <label for="">Baths</label>
                                <input type="number" placeholder="Total Baths">
                            </div>
                            <button type="button" class="primary-btn2">Advanced <i
                                    class="fa-solid fa-sliders fa-rotate-90"></i></button>
                            <button type="submit" class="primary-btn"><i class="fa-solid fa-search"></i> Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <a href="#property" class="scroll-box">
                <img src="{{ asset('assets/web/images/scroll-img.png') }}" alt="">
            </a>
        </div>
    </section>
    <section class="properties-sec" id="property">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <div class="property-sec-header">
                        <div>
                            <h6 class="sec-hd-mini">Property Types</h6>
                            <h2 class="sec-hd">Property Options</h2>
                        </div>
                        <div>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                        aria-selected="true">View All</button>
                                    <button class="nav-link" id="nav-apartment-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-apartment" type="button" role="tab" aria-controls="nav-apartment"
                                        aria-selected="false">Apartment</button>
                                    <button class="nav-link" id="nav-commercial-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-commercial" type="button" role="tab" aria-controls="nav-commercial"
                                        aria-selected="false">Commercial</button>
                                    <button class="nav-link" id="nav-land-or-plot-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-land-or-plot" type="button" role="tab" aria-controls="nav-land-or-plot"
                                        aria-selected="false">Land or Plot</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="tab-content w-100" id="nav-tabContent">

                        <div class="tab-pane fade show active w-100" id="nav-all" role="tabpanel"
                            aria-labelledby="nav-all-tab" tabindex="0">
                            <div class="property-slider-wrapper w-100 position-relative">
                                @foreach ($allListings as $listing )
                                    <div class="property-card">
                                        <div class="img-area position-relative">
                                            <img src="{{ asset('storage/'.$listing->main_image) }}" alt="" class="img-fluid">
                                            <div class="property-card-badge3">XYZ cooperative</div>
                                            <button class="btn heart-save-btn p-0">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            {{-- <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt=""
                                                class="advertisment-badge"> --}}
                                        </div>
                                        <div class="property-card-body">
                                            <div class="property-name position-relative">
                                                <h3>{{ $listing->property_title }}</h3>
                                                <p><i class="fa-solid fa-location-dot"></i> {{ $listing->address }}</p>
                                                <div class="property-card-badge">{{ $listing->listed_in }}</div>
                                            </div>
                                            <div class="other-desc">
                                                <div class="d-flex justify-content-between">
                                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed {{ $listing->bedrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath {{ $listing->bathrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> {{ $listing->size_in_ft }} sqft</p>
                                                </div>
                                            </div>
                                            <div class="property-name d-flex justify-content-between align-items-center">
                                                <h3 class="m-0">@moneyFormat($listing->price)</h3>
                                                <a href="{{ route('listing.detail', $listing->id) }}">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($allListings->isNotEmpty())
                                <div class="property-card-slider-button-wrapper position-relative">
                                    <button class="property-button-prev slider-btn"><i
                                            class="fa-solid fa-arrow-left"></i></button>
                                    <button class="property-button-next slider-btn"><i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            @endif
                        </div>
                        <div class="tab-pane fade w-100" id="nav-apartment" role="tabpanel" aria-labelledby="nav-apartment-tab"
                            tabindex="0">
                            <div class="property-slider-wrapper w-100 position-relative">

                                @foreach ($apartmentListings as $listing )
                                    <div class="property-card">
                                        <div class="img-area position-relative">
                                            <img src="{{ asset('storage/'.$listing->main_image) }}" alt="" class="img-fluid">
                                            <div class="property-card-badge3">XYZ cooperative</div>
                                            <button class="btn heart-save-btn p-0">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            {{-- <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt=""
                                                class="advertisment-badge"> --}}
                                        </div>
                                        <div class="property-card-body">
                                            <div class="property-name position-relative">
                                                <h3>{{ $listing->property_title }}</h3>
                                                <p><i class="fa-solid fa-location-dot"></i> {{ $listing->address }}</p>
                                                <div class="property-card-badge">{{ $listing->listed_in }}</div>
                                            </div>
                                            <div class="other-desc">
                                                <div class="d-flex justify-content-between">
                                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed {{ $listing->bedrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath {{ $listing->bathrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> {{ $listing->size_in_ft }} sqft</p>
                                                </div>
                                            </div>
                                            <div class="property-name d-flex justify-content-between align-items-center">
                                                <h3 class="m-0">@moneyFormat($listing->price)</h3>
                                                <a href="{{ route('listing.detail', $listing->id) }}">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            @if($apartmentListings->isNotEmpty())
                                <div class="property-card-slider-button-wrapper position-relative">
                                    <button class="property-button-prev slider-btn"><i
                                            class="fa-solid fa-arrow-left"></i></button>
                                    <button class="property-button-next slider-btn"><i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            @endif
                        </div>
                        <div class="tab-pane fade w-100" id="nav-commercial" role="tabpanel" aria-labelledby="nav-commercial-tab"
                            tabindex="0">
                            <div class="property-slider-wrapper w-100 position-relative">
                                @foreach ($commercialListings as $listing )
                                    <div class="property-card">
                                        <div class="img-area position-relative">
                                            <img src="{{ asset('storage/'.$listing->main_image) }}" alt="" class="img-fluid">
                                            <div class="property-card-badge3">XYZ cooperative</div>
                                            <button class="btn heart-save-btn p-0">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            {{-- <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt=""
                                                class="advertisment-badge"> --}}
                                        </div>
                                        <div class="property-card-body">
                                            <div class="property-name position-relative">
                                                <h3>{{ $listing->property_title }}</h3>
                                                <p><i class="fa-solid fa-location-dot"></i> {{ $listing->address }}</p>
                                                <div class="property-card-badge">{{ $listing->listed_in }}</div>
                                            </div>
                                            <div class="other-desc">
                                                <div class="d-flex justify-content-between">
                                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed {{ $listing->bedrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath {{ $listing->bathrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> {{ $listing->size_in_ft }} sqft</p>
                                                </div>
                                            </div>
                                            <div class="property-name d-flex justify-content-between align-items-center">
                                                <h3 class="m-0">@moneyFormat($listing->price)</h3>
                                                <a href="{{ route('listing.detail', $listing->id) }}">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($commercialListings->isNotEmpty())
                                <div class="property-card-slider-button-wrapper position-relative">
                                    <button class="property-button-prev slider-btn"><i
                                            class="fa-solid fa-arrow-left"></i></button>
                                    <button class="property-button-next slider-btn"><i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            @endif
                        </div>
                        <div class="tab-pane fade w-100" id="nav-land-or-plot" role="tabpanel"
                            aria-labelledby="nav-land-or-plot-tab" tabindex="0">
                            <div class="property-slider-wrapper w-100 position-relative">
                                @foreach ($landOrPlotListings as $listing )
                                    <div class="property-card">
                                        <div class="img-area position-relative">
                                            <img src="{{ asset('storage/'.$listing->main_image) }}" alt="" class="img-fluid">
                                            <div class="property-card-badge3">XYZ cooperative</div>
                                            <button class="btn heart-save-btn p-0">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            {{-- <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt=""
                                                class="advertisment-badge"> --}}
                                        </div>
                                        <div class="property-card-body">
                                            <div class="property-name position-relative">
                                                <h3>{{ $listing->property_title }}</h3>
                                                <p><i class="fa-solid fa-location-dot"></i> {{ $listing->address }}</p>
                                                <div class="property-card-badge">{{ $listing->listed_in }}</div>
                                            </div>
                                            <div class="other-desc">
                                                <div class="d-flex justify-content-between">
                                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed {{ $listing->bedrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath {{ $listing->bathrooms }}</p>
                                                    <span>|</span>
                                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> {{ $listing->size_in_ft }} sqft</p>
                                                </div>
                                            </div>
                                            <div class="property-name d-flex justify-content-between align-items-center">
                                                <h3 class="m-0">@moneyFormat($listing->price)</h3>
                                                <a href="{{ route('listing.detail', $listing->id) }}">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($landOrPlotListings->isNotEmpty())
                                <div class="property-card-slider-button-wrapper position-relative">
                                    <button class="property-button-prev slider-btn"><i
                                            class="fa-solid fa-arrow-left"></i></button>
                                    <button class="property-button-next slider-btn"><i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <img src="{{ asset('assets/web/images/index-slide-img.png') }}" alt="" class="index-slide-img">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="{{ route('listings') }}" class="primary-btn">View All</a>
            </div>
        </div>
    </section>
    <section class="about-sec">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/web/images/about-img.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="about-content-area">
                        <h6 class="sec-hd-mini">About Us</h6>
                        <h2 class="sec-hd">Empowering <Span>Communities Through</Span> Reliable Co-op Marketplace</h2>
                        <p class="sec-para">CooperativeShares.com provides a housing cooperative marketplace that educates
                            buyers and sellers, ensuring transparency, trust, and nationwide visibility.</p>
                        <div class="about-quality-box-wrapper">
                            <div class="about-quality-box">
                                <div>
                                    <img src="{{ asset('assets/web/images/about-box-img1.png') }}" alt="">
                                    <h5>Easy Listing</h5>
                                    <p>Post your cooperative housing listings quickly</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/web/images/about-box-img2.png') }}" alt="">
                                    <h5>Premium Exposure</h5>
                                    <p>Featured listings get nationwide visibility</p>
                                </div>
                            </div>
                            <div class="about-quality-box">
                                <div>
                                    <img src="{{ asset('assets/web/images/about-box-img3.png') }}" alt="">
                                    <h5>Educational Tools</h5>
                                    <p>Resources on co-op housing explained</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/web/images/about-box-img4.png') }}" alt="">
                                    <h5>Buyer Support</h5>
                                    <p>Guidance for seniors and families</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-contact-wrapper">
                            <a href="#" class="primary-btn">More About Us</a>
                            <a href="tel:8165297022" class="about-tel-btn">
                                <img src="{{ asset('assets/web/images/about-phone.png') }}" alt="">
                                <div>
                                    <p>Free Consulting</p>
                                    <h6>816-529-7022</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-loop-slider-section />
    <section class="advertise-sec position-relative">
        <div class="container">
            <div class="col-lg-12">
                <div class="hdr-adz-img">
                    <img src="{{ asset('assets/web/images/hd-adz.png') }}" alt="">
                </div>
            </div>
            <div class="row first-row">
                <div class="col-lg-7">
                    <div class="advertise-box">
                        <h2 class="sec-hd">List Your Properties</h2>
                        <p>Reach potential buyers nationwide with cooperative housing listings. Our platform ensures maximum
                            exposure, simplifies the selling process, and educates buyers about the advantages of
                            cooperative housing, making it easier to build trust and foster collaborative living in co-op
                            homes.</p>
                        <a href="#" class="primary-btn"> Show Your Co-op Homes for Sale</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/web/images/advertise-img1.png') }}" alt="" class="advertise-img-1">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/web/images/advertise-img2.png') }}" alt="" class="advertise-img-2">
                </div>
                <div class="col-lg-7">
                    <div class="advertise-box advertise-box2">
                        <h2 class="sec-hd">Manage Your Properties</h2>
                        <p>Track inquiries, showcase units, and analyze performance in real-time. Cooperativeshares.com
                            helps boards, developers, and vendors that are already registered manage listings efficiently
                            while highlighting the benefits of cooperative housing and sustainable cooperative living for
                            seniors and families alike.</p>
                        <a href="#" class="primary-btn">Manage Affordable Housing Listings</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discover-sec">
        <div class="video-area2">
            <div>
                <video src="{{ asset('assets/web/images/sec-video.mp4') }}" autoplay="true" muted="true" loop="true"
                    class="video2">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="discover-content">
                        <h6 class="sec-hd-mini">How It Works</h6>
                        <h4 style="color: white; font-size: 24px;">Browse Listing, Post Your Listing, Get Noticed, and
                            Connect & Transact.</h4>
                        <h2 class="sec-hd">Why Choose CooperativeShares.com?</h2>
                        <p>We connect communities nationwide with cooperative housing opportunities, education, and trusted
                            marketplace services. Providing a dedicated platform for co-op homes for sale near you, where
                            listings are easily created with detailed descriptions, photos, pricing, and unit
                            specifications. <br><br>
                            With options like Featured Listing for premium visibility. Plus a trustworthy educational hub
                            offering resources on how co-ops work, the benefits of cooperative housing, retirement housing
                            options, and guidance on navigating the buying and selling process. Our complete database helps
                            buyers to find exactly what they need, whether by location, price, size, or amenities.</p>
                        <a href="#" class="primary-btn">Start Your Search Now</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center discover-content">
                    <img src="{{ asset('assets/web/images/play-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <x-partner-section />
    <section class="testimonial-sec">
        <div class="container">
            <h6 class="sec-hd-mini text-center">Reviews</h6>
            <h2 class="sec-hd text-center">Client Success Stories</h2>
            <div class="testimonial-slider-wrapper">
                <div class="testimonial-slider">
                    <div class="testimonial-slide text-center">
                        <p>We found the perfect senior co-op housing through CooperativeShares.com. The platform is easy to
                            navigate, informative, and trustworthy. It guided us on retirement housing options and helped us
                            secure a co-op share with confidence.</p>
                        <img src="{{ asset('assets/web/images/rating.png') }}" alt="" class="rating-img">
                        <img src="{{ asset('assets/web/images/Team.png') }}" alt="">
                        <h5>Linda R.</h5>
                        <h6>Client</h6>
                        <div class="line"></div>
                    </div>
                    <div class="testimonial-slide text-center">
                        <p>Listing our cooperative community was simple. CooperativeShares.com highlighted our property to
                            interested buyers nationwide, emphasizing the benefits of cooperative housing and building
                            community in cooperative housing.
                        </p>
                        <img src="{{ asset('assets/web/images/rating.png') }}" alt="" class="rating-img">
                        <img src="{{ asset('assets/web/images/Team.png') }}" alt="">
                        <h5>Thomas J.</h5>
                        <h6>Client</h6>
                        <div class="line"></div>
                    </div>
                    <div class="testimonial-slide text-center">
                        <p>As a retiree, I found affordable senior housing options close to family through this marketplace.
                            The educational tools made understanding co-op housing straightforward and clear.
                        </p>
                        <img src="{{ asset('assets/web/images/rating.png') }}" alt="" class="rating-img">
                        <img src="{{ asset('assets/web/images/Team.png') }}" alt="">
                        <h5>Karen M.</h5>
                        <h6>Client</h6>
                        <div class="line"></div>
                    </div>
                    <div class="testimonial-slide text-center">
                        <p>We needed exposure for our cooperative housing listings. This platform provided premium
                            visibility, enabling us to sell quickly while educating buyers about cooperative housing.
                        </p>
                        <img src="{{ asset('assets/web/images/rating.png') }}" alt="" class="rating-img">
                        <img src="{{ asset('assets/web/images/Team.png') }}" alt="">
                        <h5>Michael S.</h5>
                        <h6>Client</h6>
                        <div class="line"></div>
                    </div>
                    <div class="testimonial-slide text-center">
                        <p>CooperativeShares.com is the ultimate housing cooperative marketplace. From co-op homes for sale
                            near me to sustainable cooperative living insights, it made buying a share in a cooperative a
                            stress-free and enjoyable experience.
                        </p>
                        <img src="{{ asset('assets/web/images/rating.png') }}" alt="" class="rating-img">
                        <img src="{{ asset('assets/web/images/Team.png') }}" alt="">
                        <h5>Sarah T.</h5>
                        <h6>Client</h6>
                        <div class="line"></div>
                    </div>
                </div>
                <button class="testimonial-prev-arrow"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="testimonial-next-arrow"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="feedback-area">
                <img src="{{ asset('assets/web/images/feed-img1.png') }}" alt="">
                <div class="line2"></div>
                <img src="{{ asset('assets/web/images/feed-img1.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="blog-sec">
        <div class="container">
            <h6 class="sec-hd-mini text-center">Our Blogs</h6>
            <h2 class="sec-hd text-center">Latest News & Updates</h2>
            <div class="blog-slider">
                <div class="blog-card">
                    <div class="all-area">
                        <div class="blog-img-area">
                            <img src="{{ asset('assets/web/images/blog-img1.png') }}" alt="" class="w-100">
                            <div class="date">Jan 28, 2025</div>
                        </div>
                        <div class="blog-content-area">
                            <h4>What is Housing Cooperative?</h4>
                            <p> Learn the housing cooperative model explained, highlighting shared ownership and the
                                benefits of cooperative housing.
                            </p>
                            <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="all-area">
                        <div class="blog-img-area">
                            <img src="{{ asset('assets/web/images/blog-img2.png') }}" alt="" class="w-100">
                            <div class="date">Jan 28, 2025</div>
                        </div>
                        <div class="blog-content-area">
                            <h4>How Cooperative Housing Works</h4>
                            <p>Discover how cooperative housing communities operate, fostering collaboration,
                                sustainability, and community in every co-op home.</p>
                            <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="all-area">
                        <div class="blog-img-area">
                            <img src="{{ asset('assets/web/images/blog-img3.png') }}" alt="" class="w-100">
                            <div class="date">Jan 28, 2025</div>
                        </div>
                        <div class="blog-content-area">
                            <h4>How to Buy a Co-op Home?</h4>
                            <p>Step-by-step guide to buy a co-op share and understand co-op housing. Learn the process from
                                exploring co-op homes for sale to finalizing your purchase.</p>
                            <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="all-area">
                        <div class="blog-img-area">
                            <img src="{{ asset('assets/web/images/blog-img2.png') }}" alt="" class="w-100">
                            <div class="date">Jan 28, 2025</div>
                        </div>
                        <div class="blog-content-area">
                            <h4>Lorem Ipsum is simply <br> dummy text of the printing.</h4>
                            <p>Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry. Lorem Ipsum.
                            </p>
                            <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="primary-btn">View All</a>
            </div>
        </div>
    </section>
    <section class="contact-sec">
        <div class="container">
            <div class="col-lg-12">
                <div class="hdr-adz-img">
                    <img src="{{ asset('assets/web/images/hd-adz.png') }}" alt="">
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-lg-7">
                    <div class="contact-form-wrapper">
                        <form action="" class="contact-form">
                            <h6 class="sec-hd-mini">Contact Us</h6>
                            <h2 class="sec-hd">Get a Free Consultation</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-field-wrapper">
                                        <input type="text" placeholder="Your name">
                                        <img src="{{ asset('assets/web/images/form-img1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field-wrapper">
                                        <input type="email" placeholder="Your email">
                                        <img src="{{ asset('assets/web/images/form-img2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-field-wrapper">
                                        <input type="tel" placeholder="Phone number">
                                        <img src="{{ asset('assets/web/images/form-img3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field-wrapper">
                                        <select aria-placeholder="Select Service">
                                            <option>Service 1</option>
                                            <option>Service 2</option>
                                            <option>Service 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="contact-field-wrapper">
                                        <textarea name="" id="" placeholder="Write Message..."></textarea>
                                        <img src="{{ asset('assets/web/images/form-img4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="contact-field-wrapper">
                                        <button class="primary-btn" type="submit">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <img src="{{ asset('assets/web/images/formabsimg.png') }}" alt="" class="sale-img">
            </div>
        </div>
    </section>
@endsection

