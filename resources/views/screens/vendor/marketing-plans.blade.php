@extends('layouts.vendor.app')

@push('styles')
    <style>
        /* .swiper {
            width: 100%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .swiper-slide {
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            padding: 30px;
        }

        .media-boost-wrapper {
            display: flex;
            justify-content: space-between;
            width: 100%;
        } */

        .media-boost,
        .Monthly-Plan {
            width: 48%;
        }

        /* .unique-price {
            font-size: 32px;
            font-weight: bold;
            color: #145;
        }

        .boost-para {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .boost-mini-para {
            font-size: 14px;
            color: #444;
        } */

        .current-plan {
            /* color: #c28a00; */
            /* font-weight: bold; */
            text-decoration: underline;
            margin-top: 10px;
            display: inline-block;
        }

        /* Swiper button styling (optional custom design) */
        .swiper-button-next,
        .swiper-button-prev {
            color: #365e63;
        }
    </style>
@endpush

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">My Marketing Plans</h1>
        <!-- <div class="media-boost-slider">
                        <div>
                            <div class="media-boost-wrapper">
                                <div class="media-boost">
                                    <p class="boost-para">Social Media Boost</p>
                                    <p class="boost-mini-para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum <br> has been the industry's standard dummy text ever since the
                                        1500s
                                    </p>
                                </div>
                                <div class="Monthly-Plan">
                                    <div class="montly-price-wrapper">
                                        <div class="unique-price">$199</div>
                                        <div>
                                            <p class="boost-para">Monthly Plan</p>
                                            <p class="boost-mini-para">Your subscription renews July 12th, 2025</p>
                                            <a href="#" class="current-plan">Current Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media-boost-wrapper">
                                <div class="media-boost">
                                    <p class="boost-para">Social Media Boost</p>
                                    <p class="boost-mini-para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum <br> has been the industry's standard dummy text ever since the
                                        1500s
                                    </p>
                                </div>
                                <div class="Monthly-Plan">
                                    <div class="montly-price-wrapper">
                                        <div class="unique-price">$199</div>
                                        <div>
                                            <p class="boost-para">Monthly Plan</p>
                                            <p class="boost-mini-para">Your subscription renews July 12th, 2025</p>
                                            <a href="#" class="current-plan">Current Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

        <!-- <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="media-boost-wrapper">
                <div class="media-boost">
                  <p class="boost-para">Social Media Boost</p>
                  <p class="boost-mini-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="Monthly-Plan">
                  <div class="montly-price-wrapper">
                    <div class="unique-price">$199</div>
                    <div>
                      <p class="boost-para">Monthly Plan</p>
                      <p class="boost-mini-para">Your subscription renews July 12th, 2025</p>
                      <a href="#" class="current-plan">Current Plan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="media-boost-wrapper">
                <div class="media-boost">
                  <p class="boost-para">Social Media Boost</p>
                  <p class="boost-mini-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="Monthly-Plan">
                  <div class="montly-price-wrapper">
                    <div class="unique-price">$199</div>
                    <div>
                      <p class="boost-para">Monthly Plan</p>
                      <p class="boost-mini-para">Your subscription renews July 12th, 2025</p>
                      <a href="#" class="current-plan">Current Plan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div> -->

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="media-boost-wrapper">
                        <div class="media-boost">
                            <p class="boost-para"><strong>Social Media Boost</strong></p>
                            <p class="boost-mini-para">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <div class="Monthly-Plan">
                            <div class="montly-price-wrapper">
                                <div class="unique-price">$199</div>
                                <div>
                                    <p class="boost-para">Monthly Plan</p>
                                    <p class="boost-mini-para">Your subscription renews <strong>July 12th, 2025</strong></p>
                                    <a href="#" class="current-plan">Current Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="media-boost-wrapper">
                        <div class="media-boost">
                            <p class="boost-para"><strong>Social Media Boost</strong></p>
                            <p class="boost-mini-para">
                                Another dummy content for slide 2, repeating similar layout for testing.
                            </p>
                        </div>
                        <div class="Monthly-Plan">
                            <div class="montly-price-wrapper">
                                <div class="unique-price">$299</div>
                                <div>
                                    <p class="boost-para">Monthly Plan</p>
                                    <p class="boost-mini-para">Your subscription renews <strong>August 12th, 2025</strong>
                                    </p>
                                    <a href="#" class="current-plan">Current Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-between align-items-center spec-hd">
            <h1 class="dashboard-hd">Marketing Add-ons</h1>
            <div class="boost-button-slide">
                <div class="swiper-button-prev">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
                <div class="swiper-button-next">
                    <i class="fa-solid fa-caret-right"></i>
                </div>
            </div>
        </div>
        <div class="pricing-box-unique-wrapper">
            <div class="unique-pricing-box">
                <div class="unique-plan-header">Social Media Boost</div>
                <div class="unique-price">$199</div>
                <div class="unique-per-user">Per User/listing</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features new-li">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para new-css">Promoted across social platforms <br> (Instagram,
                                Facebook, <br> LinkedIn)</p>
                        </li>

                    </ul>
                </div>
                <a href="{{ route('vendor.calender') }}" class="unique-upgrade-btn">UPGRADE NOW</a>
            </div>

            <div class="unique-pricing-box">
                <div class="unique-plan-header">Newsletter Feature</div>
                <div class="unique-price">$249</div>
                <div class="unique-per-user">Per User/listing</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features new-li">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para new-css">Featured in weekly <br> email to 10k+ targeted <br>
                                subscribers</p>
                        </li>

                    </ul>
                </div>
                <button class="unique-upgrade-btn">UPGRADE NOW</button>
            </div>

            <div class="unique-pricing-box last">
                <div class="unique-plan-header">Homepage Spotlight Banner</div>
                <div class="unique-price">$499</div>
                <div class="unique-per-user">Per User/Week</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features new-li">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para new-css">Prime banner placement <br> on homepage</p>
                        </li>

                    </ul>
                </div>
                <button class="unique-upgrade-btn">UPGRADE NOW</button>
            </div>
        </div>

        <h1 class="dashboard-hd">Partnership Advertising</h1>
        <div class="pricing-box-unique-wrapper">
            <div class="unique-pricing-box">
                <div class="unique-plan-header">Sidebar Ad</div>
                <div class="unique-price">$749</div>
                <div class="unique-per-user">per user/Month</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features new-li">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para new-css">Displayed on search & <br> listings pages</p>
                        </li>

                    </ul>
                </div>
                <button class="unique-upgrade-btn">UPGRADE NOW</button>
            </div>

            <div class="unique-pricing-box">
                <div class="unique-plan-header">Front Page & Footer Sponsor Slot</div>
                <div class="unique-price">$499</div>
                <div class="unique-per-user">per user/Month</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features new-li">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para new-css">Logo + backlink on <br> every page</p>
                        </li>

                    </ul>
                </div>
                <button class="unique-upgrade-btn">UPGRADE NOW</button>
            </div>

            <div class="unique-pricing-box last">
                <div class="unique-plan-header">Category Exclusive Ad</div>
                <div class="unique-price">$999</div>
                <div class="unique-per-user">Per User/Month</div>
                <div class="unique-feature-wrapper">
                    <ul class="unique-features new-li">
                        <li><i class="fa-solid fa-check"></i>
                            <p class="unique-para new-css">Only one partner per <br> service category</p>
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
        $(".media-boost-slider").slick({
            slidesToShow: 1,
            autoplay: false,
            arrows: false,
        });


    </script> -->
    <!-- <script>
      const swiper = new Swiper(".mySwiper", {
        loop: true, // Infinite scroll
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        // Optional: Autoplay
        // autoplay: {
        //   delay: 4000,
        //   disableOnInteraction: false,
        // },
      });
    </script> -->

    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
