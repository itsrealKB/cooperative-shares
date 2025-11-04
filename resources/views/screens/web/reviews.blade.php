@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="Reviews" :route="route('index')" />
    <section class="clients-sec">
        <div class="container">
            <h2 class="sec-hd text-center">Client Success Stories</h2>
            <div class="client-card-wrapper">
                       <div class="client-card-prnt">
                <div class="client-card">
                    <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                    <p class="para">We found the perfect senior co-op housing through CooperativeShares.com. The
                        platform is easy to navigate, informative, and trustworthy. It guided us on retirement housing
                        options and helped us secure a co-op share with confidence</p>
                    <div class="client-detail">
                        <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                        <div class="client-name">
                            <h4 class="sec-hd client-hd">Linda R.</h4>
                            <p class="para">Client</p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                </div>
            </div>
            <div class="client-card-prnt">
                <div class="client-card">
                    <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                    <p class="para">Listing our cooperative community was simple. CooperativeShares.com highlighted our
                        property to interested buyers nationwide, emphasizing the benefits of cooperative housing and
                        building community in cooperative housing.</p>
                    <div class="client-detail">
                        <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                        <div class="client-name">
                            <h4 class="sec-hd client-hd">Thomas J.</h4>
                            <p class="para">Client</p>
                        </div>
                        <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                    </div>
                </div>
            </div>
            <div class="client-card-prnt">
                <div class="client-card">
                    <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                    <p class="para">As a retiree, I found affordable senior housing options close to family through this
                        marketplace. The educational tools made understanding co-op housing straightforward and clear.
                    </p>
                    <div class="client-detail">
                        <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                        <div class="client-name">
                            <h4 class="sec-hd client-hd">Karen M.</h4>
                            <p class="para">Client</p>
                        </div>
                        <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                    </div>
                </div>
            </div>
            <div class="client-card-prnt">
                <div class="client-card">
                    <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                    <p class="para">We needed exposure for our cooperative housing listings. This platform provided
                        premium visibility, enabling us to sell quickly while educating buyers about cooperative
                        housing.</p>
                    <div class="client-detail">
                        <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                        <div class="client-name">
                            <h4 class="sec-hd client-hd">Michael S.</h4>
                            <p class="para">Client</p>
                        </div>
                        <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                    </div>
                </div>
            </div>
            <div class="client-card-prnt">
                <div class="client-card">
                    <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                    <p class="para">CooperativeShares.com is the ultimate housing cooperative marketplace. From co-op
                        homes for sale near me to sustainable cooperative living insights, it made buying a share in a
                        cooperative a stress-free and enjoyable experience.</p>
                    <div class="client-detail">
                        <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                        <div class="client-name">
                            <h4 class="sec-hd client-hd">Sarah T.</h4>
                            <p class="para">Client</p>
                        </div>
                        <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                    </div>
                </div>
            </div>
            <!-- <div class="client-card-prnt">
                    <div class="client-card">
                        <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                        <p class="para">Aenean orci lorem, pharetra ac imperdiet eget, tristique ac magna. In aliquet
                            efficitur turpis, et posuere tellus commodo at. Morbi accumsan nulla id neque rutrum, et tempus
                            dui venenatis. Quisque dapibus metus ligula, id tempor nisl interdum vitae.</p>
                        <div class="client-detail">
                            <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                            <div class="client-name">
                                <h4 class="sec-hd client-hd">Olivia Noa</h4>
                                <p class="para">Client</p>
                            </div>
                            <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                        </div>
                    </div>
                </div>
                <div class="client-card-prnt">
                    <div class="client-card">
                        <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                        <p class="para">Aenean orci lorem, pharetra ac imperdiet eget, tristique ac magna. In aliquet
                            efficitur turpis, et posuere tellus commodo at. Morbi accumsan nulla id neque rutrum, et tempus
                            dui venenatis. Quisque dapibus metus ligula, id tempor nisl interdum vitae.</p>
                        <div class="client-detail">
                            <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                            <div class="client-name">
                                <h4 class="sec-hd client-hd">Olivia Noa</h4>
                                <p class="para">Client</p>
                            </div>
                            <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                        </div>
                    </div>
                </div>
                <div class="client-card-prnt">
                    <div class="client-card">
                        <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                        <p class="para">Aenean orci lorem, pharetra ac imperdiet eget, tristique ac magna. In aliquet
                            efficitur turpis, et posuere tellus commodo at. Morbi accumsan nulla id neque rutrum, et tempus
                            dui venenatis. Quisque dapibus metus ligula, id tempor nisl interdum vitae.</p>
                        <div class="client-detail">
                            <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                            <div class="client-name">
                                <h4 class="sec-hd client-hd">Olivia Noa</h4>
                                <p class="para">Client</p>
                            </div>
                            <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                        </div>
                    </div>
                </div>
                <div class="client-card-prnt">
                    <div class="client-card">
                        <img src="{{ asset('assets/web/images/star.png') }}" alt="" class="star-img">
                        <p class="para">Aenean orci lorem, pharetra ac imperdiet eget, tristique ac magna. In aliquet
                            efficitur turpis, et posuere tellus commodo at. Morbi accumsan nulla id neque rutrum, et tempus
                            dui venenatis. Quisque dapibus metus ligula, id tempor nisl interdum vitae.</p>
                        <div class="client-detail">
                            <img src="{{ asset('assets/web/images/client-img.png') }}" alt="" class="img-fluid client-img">
                            <div class="client-name">
                                <h4 class="sec-hd client-hd">Olivia Noa</h4>
                                <p class="para">Client</p>
                            </div>
                            <img src="{{ asset('assets/web/images/ab-rev-card.png') }}" alt="" class="img-fluid ab-rev-card">
                        </div>
                    </div>
                </div> -->
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-lg-12">-->
        <!--        <div class="pagination-btns">-->
        <!--            <button>1</button>-->
        <!--            <button>2</button>-->
        <!--            <button>3</button>-->
        <!--            <button class="active">Next-->
        <!--                <i><i class="fa-solid fa-arrow-right"></i></i>-->
        <!--            </button>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        </div>
    </section>
    <x-partner-section />
@endsection
