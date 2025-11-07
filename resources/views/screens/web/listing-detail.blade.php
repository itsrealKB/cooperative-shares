@extends('layouts.web.app')

@php
    $page = false;
    $files = json_decode($listing->files);
    $images = [];
    $videos = [];
    foreach ($files as $file) {

        if ($file->type == 'mp4') {
            $videos[] = $file;
        } else {
            $images[] = $file;
        }
    }

@endphp

@push('styles')
    <style>
    .property-btn-wrapper {
        position: relative;
    }

    .vdo-play-btn {
        position: absolute;
        top: 45%;
        left: 48%;
        color: white;
        padding: 22px 24px;
        background: gray;
        border: 1px solid white;
        border-radius: 100%;
        cursor: pointer;
        transition: 0.5s;
    }

    .vdo-play-btn:hover {
        transition: 0.5s;
        background: #fff;
        color: #000;
    }
</style>
@endpush

@section('section')
    <section class="listing-detail-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-listing-slider">
                        <img id="mainImage" class="main-image" src="{{ asset('storage/' . $listing->main_image) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="thumbnail-slider-wrapper">

                        <div class="thumbnail-slide">
                            <div class="thumbnail active"><img src="{{ asset('storage/' . $listing->main_image) }}"
                                    data-large="{{ asset('storage/' . $listing->main_image) }}"></div>
                        </div>

                        @foreach ($images as $image)
                            <div class="thumbnail-slide">
                                <div class="thumbnail active"><img src="{{ asset('storage/' . $image->path) }}"
                                        data-large="{{ asset('storage/' . $image->path) }}"></div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="listin-det-hd">{{ $listing->property_title }}</h2>
                    <p class="listin-det-para">{{ $listing->description }}</p>
                    <div class="bed-det-wrapp">
                        <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> <span>Bed
                                {{ $listing->bedrooms }}</span></p>
                        <span>|</span>
                        <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> <span>Bath
                                {{ $listing->bathrooms }}</span></p>
                        <span>|</span>
                        <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> <span>{{ $listing->size_in_ft }}
                                sqft</span></p>
                    </div>
                    <h2 class="listin-det-hd-mini">About This Property</h2>
                    <p class="listing-para-mini">{{ $listing->listing_description }}</p>
                    {{-- <p class="listing-para-mini">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker.</p>
                    <p class="listing-para-mini">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting.</p> --}}
                    <h2 class="listin-det-hd-mini">Property Overview</h2>
                    <div class="property-details">
                        <div class="property-content">
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item1.png') }}" alt="">
                                </div>
                                <p class="item-para">ID NO.<br><strong>#{{ $listing->id }}</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item2.png') }}" alt="">
                                </div>
                                <p class="item-para">Type<br><strong>{{ Str::ucfirst($listing->category) }}</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item3.png') }}" alt="">
                                </div>
                                <p class="item-para">Room<br><strong>{{ $listing->bedrooms }}</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item4.png') }}" alt="">
                                </div>
                                <p class="item-para">Bedroom<br><strong>{{ $listing->bedrooms }}</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item5.png') }}" alt="">
                                </div>
                                <p class="item-para">Bath<br><strong>{{ $listing->bedrooms }}</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item6.png') }}" alt="">
                                </div>
                                <p class="item-para">Purpose<br><strong>For Rent</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item7.png') }}" alt="">
                                </div>
                                <p class="item-para">Sqft<br><strong>{{ $listing->size_in_ft }}</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item9.png') }}" alt="">
                                </div>
                                <p class="item-para">Parking<br><strong>{{ $listing->has_parking ? 'Yes' : 'No' }}</strong>
                                </p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item8.png') }}" alt="">
                                </div>
                                <p class="item-para">
                                    Elevator<br><strong>{{ $listing->has_elevator ? 'Yes' : 'No' }}</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="{{ asset('assets/web/images/item10.png') }}" alt="">
                                </div>
                                <p class="item-para">Wifi<br><strong>{{ $listing->has_wifi ? 'Yes' : 'No' }}</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="">
                            <div class="item">
                                <div class="item-img">
                                    <img src="assets/images/item1.png" alt="">
                                </div>
                                <p>ID NO.<br><strong>#1234</strong></p>
                            </div>
                            <div class="item">
                                <div class="item-img">
                                    <img src="assets/images/item2.png" alt="">
                                </div>
                                <p>Type<br><strong>Residencial</strong></p>
                            </div>
                        </div>
                    </div> -->
                    <h2 class="listin-det-hd-mini">From Our Gallery</h2>
                    <div class="row justify-content-evenly">

                        @foreach ($images as $image)
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="{{ asset('storage/' . $image->path) }}" data-fancybox="gallery">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="" class="Gallery-img mt-3 me-2">
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <h2 class="listin-det-hd-mini listin-Features">Features & Amenities</h2>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <ul class="Features-2">

                                @if($listing->has_ac)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Airconditioning
                                    </li>
                                @endif

                                @if($listing?->has_balcony)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Balcony
                                    </li>
                                @endif

                                @if($listing->has_garages)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Garage
                                    </li>
                                @endif

                                @if($listing?->has_landscaping)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Landscaping
                                    </li>
                                @endif

                                @if($listing->has_kitchen)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Outdoor Kitchen
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <ul class="Features-2">

                                @if($listing->has_bbq)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Barbeque
                                    </li>
                                @endif

                                @if($listing?->has_recreation)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Recreation
                                    </li>
                                @endif

                                @if($listing?->has_microwave)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Microwave
                                    </li>
                                @endif

                                @if($listing?->basketball)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Basketball
                                    </li>
                                @endif

                                @if($listing->has_fireplace)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Fireplace
                                    </li>
                                @endif

                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <ul class="Features-2">

                                @if($listing?->has_security)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        24×7 Security
                                    </li>
                                @endif

                                @if($listing?->has_indoor_game)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Indoor Game
                                    </li>
                                @endif

                                @if($listing->has_pool)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Pool
                                    </li>
                                @endif

                                @if($listing?->has_tennis_court)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Tennis Courts
                                    </li>
                                @endif

                                @if($listing->has_wifi)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Internet
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <ul class="Features-2">

                                @if($listing?->has_jaguzzi)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Jaguzzi
                                    </li>
                                @endif

                                @if($listing->has_modern_kitchen)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Modern Kitchen
                                    </li>
                                @endif

                                @if($listing->has_refrigerator)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Refrigerator
                                    </li>
                                @endif

                                @if($listing?->has_window_coverings)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Window Coverings
                                    </li>
                                @endif

                                @if($listing?->has_washer)
                                    <li class="Feature">
                                        <img src="{{ asset('assets/web/images/tic-img.png') }}" alt="">
                                        Washer
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <h2 class="listin-det-hd-mini">Location</h2>
                    <section class="map-sec-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52784203.16337093!2d-161.37967564687162!3d36.14970978124419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1750293825685!5m2!1sen!2s"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="map-map2"></iframe>
                    </section>
                    <div class="floor-div-none">
                        <div class="floor-div">
                            <div class="floor-hd">
                                <h2 class="listin-det-hd-mini">Floor Plan</h2>
                            </div>

                            <div class="floor-button">
                                <button class="floor-nav-link active" data-tab="0">First Floor</button>
                                <button class="floor-nav-link" data-tab="1">Second Floor</button>
                                <button class="floor-nav-link" data-tab="2">Third Floor</button>
                                <button class="floor-nav-link" data-tab="3">Top Garden</button>
                            </div>
                        </div>

                        <!-- Floor Content (Each floor content block) -->
                        <div class="floor-content-wrapper">

                            <!-- First Floor (default visible) -->
                            <div class="flor-img-prnt floor-tab-content active">
                                <div class="flor-img-div">
                                    <div class="flor-img">
                                        <img src="{{ asset('assets/web/images/first1.png') }}" alt="">
                                    </div>
                                    <div class="flor-content">
                                        <h2 class="listin-det-hd-mini listin-det-hd-mini-2">First Floor</h2>
                                        <p class="listing-para-mini listing-para-mini-2">doloremque laudantium, totam rem
                                            aperiam,
                                            eaque ipsa quae ab illo inventore veritatis et
                                            quasi architecto beatae vitae dicta sunt
                                            explicabo. Dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci velit, sed quia non
                                            numquam eius modi tempora incidunt ut labore.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Floor -->
                            <div class="flor-img-prnt floor-tab-content">
                                <div class="flor-img-div">
                                    <div class="flor-img">
                                        <img src="{{ asset('assets/web/images/first1.png') }}" alt="">
                                    </div>
                                    <div class="flor-content">
                                        <h2 class="listin-det-hd-mini listin-det-hd-mini-2">Second Floor</h2>
                                        <p class="listing-para-mini listing-para-mini-2">doloremque laudantium, totam rem
                                            aperiam,
                                            eaque ipsa quae ab illo inventore veritatis et
                                            quasi architecto beatae vitae dicta sunt
                                            explicabo. Dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci velit, sed quia non
                                            numquam eius modi tempora incidunt ut labore.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Third Floor -->
                            <div class="flor-img-prnt floor-tab-content">
                                <div class="flor-img-div">
                                    <div class="flor-img">
                                        <img src="{{ asset('assets/web/images/first1.png') }}" alt="">
                                    </div>
                                    <div class="flor-content">
                                        <h2 class="listin-det-hd-mini listin-det-hd-mini-2">Third Floor</h2>
                                        <p class="listing-para-mini listing-para-mini-2">doloremque laudantium, totam rem
                                            aperiam,
                                            eaque ipsa quae ab illo inventore veritatis et
                                            quasi architecto beatae vitae dicta sunt
                                            explicabo. Dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci velit, sed quia non
                                            numquam eius modi tempora incidunt ut labore.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Top Garden -->
                            <div class="flor-img-prnt floor-tab-content">
                                <div class="flor-img-div">
                                    <div class="flor-img">
                                        <img src="{{ asset('assets/web/images/first1.png') }}" alt="">
                                    </div>
                                    <div class="flor-content">
                                        <h2 class="listin-det-hd-mini listin-det-hd-mini-2">Top Garden</h2>
                                        <p class="listing-para-mini listing-para-mini-2">doloremque laudantium, totam rem
                                            aperiam,
                                            eaque ipsa quae ab illo inventore veritatis et
                                            quasi architecto beatae vitae dicta sunt
                                            explicabo. Dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci velit, sed quia non
                                            numquam eius modi tempora incidunt ut labore.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="flor-img-div floor-tab-content">
                        <div class="flor-img">
                            <img src="{{ asset('assets/web/images/first1.png') }}" alt="">
                        </div>
                        <div class="flor-content">
                            <h2 class="listin-det-hd-mini listin-det-hd-mini-2">First Floor</h2>
                            <p class="listing-para-mini listing-para-mini-2">doloremque laudantium, totam rem aperiam,<br>
                                eaque ipsa quae ab illo inventore veritatis et <br>
                                quasi architecto beatae vitae dicta sunt <br>
                                explicabo. Dolorem ipsum quia dolor sit amet,<br>
                                consectetur, adipisci velit, sed quia non <br>
                                numquam eius modi tempora incidunt ut <br>labore.</p>
                        </div>
                    </div>
                    <div class="flor-img-div floor-tab-content">
                        <div class="flor-img">
                            <img src="{{ asset('assets/web/images/first1.png') }}" alt="">
                        </div>
                        <div class="flor-content">
                            <h2 class="listin-det-hd-mini listin-det-hd-mini-2">susos Floor</h2>
                            <p class="listing-para-mini listing-para-mini-2">doloremque laudantium, totam rem aperiam,<br>
                                eaque ipsa quae ab illo inventore veritatis et <br>
                                quasi architecto beatae vitae dicta sunt <br>
                                explicabo. Dolorem ipsum quia dolor sit amet,<br>
                                consectetur, adipisci velit, sed quia non <br>
                                numquam eius modi tempora incidunt ut <br>labore.</p>
                        </div>
                    </div>
                    @if(count($videos) > 0)                        
                        <h2 class="listin-det-hd-mini">Property Video</h2>
                        @foreach ($videos as $video)                        
                            <div class="property-btn-wrapper">
                                <img id="property-img" src="{{ asset('storage/'.$listing->main_image) }}" alt="" class="img-fluid">
                                <div id="play-btn" class="vdo-play-btn" onclick="playVideo()">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <!-- Video element (initially hidden) -->
                                <video id="property-video" class="img-fluid" style="display:none;" controls>
                                    <source src="{{ asset('storage/'.$video->path) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endforeach
                    @endif
                    
                    <h2 class="listin-det-hd-mini">Property Review</h2>
                    <div class="review-box">
                        <div class="review-div-1">
                            <div class="review-hd">
                                <h2 class="listin-det-hd-mini listin-det-hd-mini-3">Review</h2>
                            </div>
                            <div class="review-btn">
                                <button class="floor-nav-link">
                                    <i class="fa-solid fa-star"></i>
                                    Login to Write Your Review
                                </button>
                            </div>
                        </div>
                        <div class="reviews-1">
                            <div class="reviews-item">
                                <div class="revies-item-number">
                                    <h2 class="number-hd">3</h2>
                                </div>
                                <div class="reviews-stars">
                                    <img src="{{ asset('assets/web/images/star-img1.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img1.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img1.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img2.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img2.png') }}" alt="">
                                    <h2 class="review1-hd">
                                        1 review
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-1 reviews-2">
                            <div class="reviews-item">
                                <div class="realar-img">
                                    <img src="{{ asset('assets/web/images/realar-img.png') }}" alt="">
                                </div>
                                <div class="reviews-stars">
                                    <h2 class="review1-hd review2-hd">
                                        Realar
                                    </h2>
                                    <img src="{{ asset('assets/web/images/star-img1.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img1.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img1.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img2.png') }}" alt="">
                                    <img src="{{ asset('assets/web/images/star-img2.png') }}" alt="">
                                    <p class="review-para">7 May, 2024</p>
                                </div>
                            </div>
                            <p class="listing-para-mini rev-main-para">Rapidiously myocardinate cross-platform intellectual
                                capital model. Appropriately create
                                interactive
                                infrastructures</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky-sidebar-2">
                        <form action="" class="listing-det-form">
                            <h3>Contact the listing owner</h3>
                            <div class="form-line"></div>
                            <input type="text" placeholder="Name" required>
                            <input type="email" placeholder="Email" required>
                            <textarea name="" id="" placeholder="Message..." required></textarea>
                            <button type="submit">Submit Now</button>
                        </form>
                        <div class="listing-user-info">
                            <h3>User Info</h3>
                            <div class="form-line"></div>
                            <div class="realer-wrap">
                                <img src="{{ asset('assets/web/images/realer-avatar.png') }}" alt="">
                                <div>
                                    <h5>Realar</h5>
                                    <h6>Member since 1 year ago</h6>
                                </div>
                            </div>
                            <div class="realer-contact-info-wrapper">
                                <a>
                                    <p><i class="fa-solid fa-location-dot"></i> <span>Brooklyn, New York 11233, United
                                            States</span></p>
                                </a>
                                <a href="#">
                                    <p><i class="fa-solid fa-phone"></i> <span>0123456789</span></p>
                                </a>
                                <a href="#">
                                    <p><i class="fa-solid fa-envelope"></i> <span>info@gmail.com</span></p>
                                </a>
                                <a href="#">
                                    <p><i class="fa-solid fa-earth-americas"></i> <span>www.example.com</span></p>
                                </a>
                            </div>
                            <div class="realer-icon-wrapper">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="#" class="relaler-profile-btn">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-partner-section />
@endsection

@push('scripts')
    <script>
        // Fancybox Config
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "thumbs",
                "zoom",
                "fullScreen",
                "share",
                "close"
            ],
            loop: false,
            protect: true
        });

    </script>
    <script>
        // Function to handle the play button click
        function playVideo() {
            // Hide the image and play button
            document.getElementById('property-img').style.display = 'none'; // Hide the image
            document.getElementById('play-btn').style.display = 'none';     // Hide the play button

            // Show the video
            var video = document.getElementById('property-video');
            video.style.display = 'block'; // Show the video element

            // Play the video
            video.play();
        }

        // Optional: In case you want to pause the video and show the image again
        function pauseVideo() {
            var video = document.getElementById('property-video');
            video.pause();  // Pause the video
            video.style.display = 'none';  // Hide the video
            document.getElementById('property-img').style.display = 'block';  // Show the image again
            document.getElementById('play-btn').style.display = 'block';    // Show the play button again
        }

    </script>
@endpush