@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="Realtor Profile" :route="route('index')" />
    <section class="profile-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="profile-sec-div">
                        <img src="{{ asset('assets/web/images/profile-circle-img.png') }}" alt="" class="img-fluid profile-circle-img">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="circle-profile-hd3 text-center circle-profile2-hd3">
                        <h3 class="profile-heading">28 <span>Communities</span></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="circle-profile-hd3 text-center circle-profile2-hd3">
                        <h3 class="profile-heading">28 <span>units</span></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="text-center circle-profile2-hd3">
                        <h3 class="profile-heading">28 <span>Cities</span></h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p class="profile-crcle-para text-center">All community data is sourced from <span>Cooperative
                            Homes</span> listings and may not represent this company's complete portfolio.</p>
                </div>
                <div class="col-lg-12">
                    <div class="select-div">
                        <select placeholder="St Tonganoxie">
                            <option value="">St Tonganoxie</option>
                            <option value="">St Tonganoxie</option>
                        </select>
                    </div>
                    <div class="realtor-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24768.68367075121!2d-95.09900107819405!3d39.10452448995828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bf7db9fcc83609%3A0x1330a70179a4b4c4!2sTonganoxie%20Christian%20Church!5e0!3m2!1sen!2s!4v1752702664922!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="profile-card-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec-hd text-center mb-5">O Circle Communities in USA</h2>
                </div>
            </div>
            <div class="property-card-wrapper2">
                <div class="property-card-prnt">
                    <div class="property-card">
                        <div class="img-area position-relative">
                            <img src="{{ asset('assets/web/images/Container.png') }}" alt="" class="img-fluid">
                            <div class="property-card-badge3">XYZ cooperative</div>
                            <button class="btn heart-save-btn p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum&nbsp;is simply dummy</p>
                                <div class="property-card-badge">Co-Op Share</div>
                            </div>
                            <div class="other-desc">
                                <div class="d-flex justify-content-between">
                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed 4</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath 2</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                                </div>
                            </div>
                            <div class="property-name d-flex justify-content-between align-items-center">
                                <h3 class="m-0">$179,800.00</h3>
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card-prnt">
                    <div class="property-card">
                        <div class="img-area position-relative">
                            <img src="{{ asset('assets/web/images/Container2.png') }}" alt="" class="img-fluid">
                            <div class="property-card-badge3">XYZ cooperative</div>
                            <button class="btn heart-save-btn p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum&nbsp;is simply dummy</p>
                                <div class="property-card-badge">Co-Op Share</div>
                            </div>
                            <div class="other-desc">
                                <div class="d-flex justify-content-between">
                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed 4</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath 2</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                                </div>
                            </div>
                            <div class="property-name d-flex justify-content-between align-items-center">
                                <h3 class="m-0">$335,800.00</h3>
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card-prnt">
                    <div class="property-card">
                        <div class="img-area position-relative">
                            <img src="{{ asset('assets/web/images/Container3.png') }}" alt="" class="img-fluid">
                            <div class="property-card-badge3">XYZ cooperative</div>
                            <button class="btn heart-save-btn p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum&nbsp;is simply dummy</p>
                                <div class="property-card-badge">Co-Op Share</div>
                            </div>
                            <div class="other-desc">
                                <div class="d-flex justify-content-between">
                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed 4</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath 2</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                                </div>
                            </div>
                            <div class="property-name d-flex justify-content-between align-items-center">
                                <h3 class="m-0">$250,800.00</h3>
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card-prnt">
                    <div class="property-card">
                        <div class="img-area position-relative">
                            <img src="{{ asset('assets/web/images/Container.png') }}" alt="" class="img-fluid">
                            <div class="property-card-badge3">XYZ cooperative</div>
                            <button class="btn heart-save-btn p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum&nbsp;is simply dummy</p>
                                <div class="property-card-badge">Co-Op Share</div>
                            </div>
                            <div class="other-desc">
                                <div class="d-flex justify-content-between">
                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed 4</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath 2</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                                </div>
                            </div>
                            <div class="property-name d-flex justify-content-between align-items-center">
                                <h3 class="m-0">$179,800.00</h3>
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card-prnt">
                    <div class="property-card">
                        <div class="img-area position-relative">
                            <img src="{{ asset('assets/web/images/Container2.png') }}" alt="" class="img-fluid">
                            <div class="property-card-badge3">XYZ cooperative</div>
                            <button class="btn heart-save-btn p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum&nbsp;is simply dummy</p>
                                <div class="property-card-badge">Co-Op Share</div>
                            </div>
                            <div class="other-desc">
                                <div class="d-flex justify-content-between">
                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed 4</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath 2</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                                </div>
                            </div>
                            <div class="property-name d-flex justify-content-between align-items-center">
                                <h3 class="m-0">$335,800.00</h3>
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-card-prnt">
                    <div class="property-card">
                        <div class="img-area position-relative">
                            <img src="{{ asset('assets/web/images/Container3.png') }}" alt="" class="img-fluid">
                            <div class="property-card-badge3">XYZ cooperative</div>
                            <button class="btn heart-save-btn p-0">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum&nbsp;is simply dummy</p>
                                <div class="property-card-badge">Co-Op Share</div>
                            </div>
                            <div class="other-desc">
                                <div class="d-flex justify-content-between">
                                    <p><img src="{{ asset('assets/web/images/Vector1.png') }}" alt=""> Bed 4</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector2.png') }}" alt=""> Bath 2</p>
                                    <span>|</span>
                                    <p><img src="{{ asset('assets/web/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                                </div>
                            </div>
                            <div class="property-name d-flex justify-content-between align-items-center">
                                <h3 class="m-0">$250,800.00</h3>
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-crd-btn text-center">
                        <a href="" class="profile-crd-btn-a">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advertise-sec position-relative">
        <div class="container">
            <div class="row first-row">
                <div class="col-lg-7">
                    <div class="advertise-box">
                        <h2 class="sec-hd">USA</h2>
                        <p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum..</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/web/images/main-img1.png') }}" alt="" class="advertise-img-1">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/web/images/main-img.png') }}" alt="" class="advertise-img-2">
                </div>
                <div class="col-lg-7">
                    <div class="advertise-box advertise-box2">
                        <h2 class="sec-hd">Las Vigas</h2>
                        <p>Lorem Ipsum&nbsp; is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Photo-Gallery-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec-hd text-center">Photo Gallery</h2>
                </div>
            </div>
            <div class="photo-gallery-div">
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery1.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery1.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-2.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-2.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-3.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-3.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-4.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-4.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-5.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-5.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-6.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-6.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-7.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-7.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-8.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-8.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="gallery-img">
                    <a href="{{ asset('assets/web/images/gallery-9.png') }}" data-fancybox="gallery">
                        <img src="{{ asset('assets/web/images/gallery-9.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-btns circle-pagination-btns">
                        <button>1</button>
                        <button>2</button>
                        <button>3</button>
                        <button class="active">Next
                            <i><i class="fa-solid fa-arrow-right"></i></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endpush
