@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="About Us" :route="route('index')" />
    <section class="realEstate-sec 6 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="about-state-adz">
                        <img src="{{ asset('assets/web/images/about-adz-state.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="realEstate-content">
                        <h2 class="sec-hd mb-4">About<span> Cooperativeshares.com</span></h2>
                        <p class="para"><strong>We Build Communities Through a Reliable Co-op Marketplace</strong></p>
                        <p class="para">CooperativeShares.com is a dedicated platform connecting buyers, sellers, and boards
                            in cooperative living communities across the United States. We make it simple to explore co-op
                            homes for sale, understand the purchasing process, and connect directly with boards, developers,
                            and vendors that are already registered.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/web/images/about-1.png') }}" alt="" class="img-fluid realstate-img">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/web/images/about-2.png') }}" alt="" class="img-fluid realstate-img">
                            </div>
                        </div>
                        <p class="para para-2">Whether you are a senior exploring retirement co-op housing or a family
                            looking for a co-op share, our educational resources guide you through every step. We provide a
                            transparent, trustworthy, and user-friendly environment that empowers communities and ensures
                            residents can make informed decisions about co-op ownership.</p>
                        <p class="para para-2">We simplify cooperative homeownership by offering guidance, listings, and
                            education for everyone interested in cooperative living.</p>
                        <div class="about-quality-box-wrapper">
                            <div class="about-quality-box">
                                <div>
                                    <img src="{{asset('assets/web/images/about-box-img1.png') }}" alt="">
                                    <h5>Easy Listings</h5>
                                    <p>Quickly post your co-op <br> homes for sale</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/about-box-img3.png') }}" alt="">
                                    <h5>Buyer Support</h5>
                                    <p>Assistance for senior cooperative <br> housing seekers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-state-adz">
                        <img src="{{ asset('assets/web/images/about-3.png') }}" alt="">
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-sm-12">
                    <div class="realEstate-content">
                        <h2 class="sec-hd mb-4">Empowering Your <br><span>Real Estate Journey</span></h2>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting. Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                            make a type specimen book. It has survived not only five centuries. </p>
                        <img src="assets/images/real-estate-img.png" alt="" class="img-fluid real-estate-img">
                    </div>
                </div> -->
                <!-- <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <img src="assets/images/real-estate2.png" alt="" class="img-fluid real-estate-img1">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="assets/images/real-estate3.png" alt="" class="img-fluid real-estate-img1">
                        </div>
                    </div>
                    <p class="para mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting. Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.<br><br>It has survived not only five centuries, but also the leap
                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of Letraset sheets containing Lorem Ipsum passages.</p>
                    <div class="about-quality-box-wrapper">
                        <div class="about-quality-box">
                            <div>
                                <img src="assets/images/about-box-img1.png" alt="">
                                <h5>Quality Services</h5>
                                <p>Deals with issues in the exhaust</p>
                            </div>
                            <div>
                                <img src="assets/images/about-box-img2.png" alt="">
                                <h5>Space Belongings</h5>
                                <p>Ensuring that issues in the system</p>
                            </div>
                        </div>
                        <div class="about-quality-box">
                            <div>
                                <img src="assets/images/about-box-img3.png" alt="">
                                <h5>Clients Feedback</h5>
                                <p>Ensuring the exhaust system deals</p>
                            </div>
                            <div>
                                <img src="assets/images/about-box-img4.png" alt="">
                                <h5>Personal Liability</h5>
                                <p>Exhaust system deals with all issues</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <x-loop-slider-section/>
    <section class="mission-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hdr-adz-img">
                        <img src="{{ asset('assets/web/images/hd-adz.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <img src="{{ asset('assets/web/images/mission1.png') }}" alt="" class="img-fluid mission-img">
                </div>
                <div class="col-lg-3 px-0">
                    <div class="mission-card mission-card2">
                        <h2 class="sec-hd text-center">Our Story</h2>
                        <p class="para text-center">CooperativeShares.com was created to modernize the way people find and
                            sell co-op shares. Many communities rely on word of mouth or outdated advertising, leaving
                            buyers uncertain and listings unseen</p>
                        <p class="para text-center">Our platform not only showcases co-op homes for sale but also provides
                            educational support, helping people buy a co-op share with full confidence. Our mission is to
                            make cooperative ownership accessible, trusted, and transparent, bridging the gap between
                            buyers, sellers, and boards nationwide.</p>
                    </div>
                    <div class="mission-card mission-card3">
                        <h2 class="sec-hd text-center">Why Choose Us?</h2>
                        <p class="para text-center"><span>100% Focused on Co-op Communities</span><br>
                            Buyers can explore verified co-op homes, and sellers and boards gain nationwide exposure.</p>
                        <p class="para text-center"><span>Simplified Process</span> <br>
                            Tools and resources make purchasing a co-op share easier and more transparent.</p>
                        <p class="para text-center"><span>Community & Engagement</span> <br>
                            We highlight the benefits of cooperative living, including shared ownership and active
                            participation.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('assets/web/images/mission2.png') }}" alt="" class="img-fluid mission-img">
                </div>
            </div>
        </div>
    </section>
    <section class="luxury-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="luxury-dev">
                        <h2 class="sec-hd text-center">Explore Co-op Properties</h2>
                        <p class="para text-center">Our site allows you to search for co-op homes, view detailed listings,
                            and discover properties suitable for families, seniors, and retirees. Each listing provides
                            comprehensive information to help buyers make informed decisions.</p>
                        <p class="para text-center">Experience seamless access to co-op housing options with
                            community-focused features, pricing, and listings designed to create a smooth buying experience
                            for residents and investors alike.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cop-sec">
        <div class="cop-vedio position-relative">
            <video src="{{ asset('assets/web/images/MicrosoftTeams-video.mp4') }}" autoplay="true" muted="true" loop="true" class="video2">
            </video>
        </div>
        <img src="{{ asset('assets/web/images/cop2.png') }}" alt="" class="img-fluid cop-img">
        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cop-dev">

                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <section class="adz-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hdr-adz-img">
                        <img src="{{ asset('assets/web/images/hd-adz.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-partner-section/>
@endsection
