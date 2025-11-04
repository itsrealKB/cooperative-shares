@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="Listings" :route="route('index')" />
    <section class="our-property-sec">
        <div class="container">
            <div class="our-property-sec-header our-property-sec-header-2">
                <div>
                    <h6 class="sec-hd-mini">Property Types</h6>
                    <h2 class="sec-hd">Property Options</h2>
                </div>
                <div class="pro-icon-dev">
                    <div class="our-pro-icons">
                        <button class="our-pro-button"><i class="fa-solid fa-sliders fa-rotate-90"></i></button>
                        <button class="our-pro-button" id="listViewBtn"><i class="fa-solid fa-list-ul"></i></button>
                        <button class="our-pro-button" id="gridViewBtn"><i class="fas fa-th-large"></i></button>
                    </div>
                    <select placeholder="Default Sorting">
                        <option value="">Default Sorting</option>
                        <option value="">Default Sorting</option>
                    </select>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
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
                            <img src="{{ asset('assets/web/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                        </div>
                        <div class="property-card-body">
                            <div class="property-name position-relative">
                                <h3>Homes For Sale</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
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
                                <a href="{{ route('listing.detail') }}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-btns">
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
    <x-partner-section />
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const listViewBtn = document.getElementById("listViewBtn");
            const gridViewBtn = document.getElementById("gridViewBtn");

            const cardWrappers = document.querySelectorAll(".property-card-wrapper2 .property-card-prnt");
            const cardImages = document.querySelectorAll(".property-card .img-area img");
            const cardBodies = document.querySelectorAll(".property-card-body");
            const cardNames = document.querySelectorAll(".property-name");
            const propertyCards = document.querySelectorAll(".property-card");

            // List View
            listViewBtn.addEventListener("click", function () {
                propertyCards.forEach(card => {
                    card.style.display = "flex";
                });

                cardWrappers.forEach(card => {
                    if (window.innerWidth < 1024) {
                        card.style.width = "calc(100% / 1 - 0px)";
                    } else {
                        card.style.width = "calc(100% / 2 - 10px)";
                    }
                });

                cardImages.forEach(img => {
                    img.style.height = "100%";
                });

                cardBodies.forEach(body => {
                    body.style.width = "70%";
                });

                cardNames.forEach(name => {
                    name.style.padding = "15px";
                });
            });

            // Grid View (Reset)
            gridViewBtn.addEventListener("click", function () {
                propertyCards.forEach(card => {
                    card.style.display = "block";
                });

                cardWrappers.forEach(card => {
                    card.style.width = "";
                });

                cardImages.forEach(img => {
                    img.style.height = "";
                });

                cardBodies.forEach(body => {
                    body.style.width = "";
                });

                cardNames.forEach(name => {
                    name.style.padding = "";
                });
            });
        });
    </script>
@endpush
