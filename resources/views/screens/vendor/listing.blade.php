@extends('layouts.vendor.app')

@section('section')
    <section class="main-content-area">
        <div class="heading-wrapper">
            <h1 class="dashboard-hd">Listings</h1>
            <a href="{{ route('vendor.add.listing') }}" class="add-btn"><img src="{{ asset('assets/vendor/images/listing-add-btn.png') }}" alt=""> Add Listing</a>
        </div>
        <div class="profile-info-wrapper listing-info">
            <div class="listing-card-wrapper listing-card-wrapper2">
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="property-card">
                    <div class="img-area position-relative">
                        <img src="{{ asset('assets/vendor/images/Container2.png') }}" alt="" class="img-fluid">
                        <div class="property-card-badge3">XYZ cooperative</div>
                        <img src="{{ asset('assets/vendor/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                    </div>
                    <div class="property-card-body">
                        <div class="property-name position-relative">
                            <div class="property-dotted-btn-wrapper">
                                <div>
                                    <h3>Homes For Sale</h3>
                                    <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/vendor/images/property-dotted-btn.png') }}" class="custom-toggle" alt="">
                                    <div class="custom-dropdown-menu" style="display: none;">
                                        <div class="custom-dropdown-item">Edit</div>
                                        <div class="custom-dropdown-item text-danger">Delete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-card-badge">Co-Op Share</div>
                        </div>
                        <div class="other-desc">
                            <div class="d-flex justify-content-between">
                                <p><img src="{{ asset('assets/vendor/images/Vector1.png') }}" alt=""> Bed 4</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector2.png') }}" alt=""> Bath 2</p>
                                <span>|</span>
                                <p><img src="{{ asset('assets/vendor/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                            </div>
                        </div>
                        <div class="property-name d-flex justify-content-between align-items-center">
                            <h3 class="m-0">$250,800.00</h3>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrapper">
                <div class="pag-para">
                    <p>Showing <span>1</span> of <span>8</span> Results</p>
                </div>
                <div class="pagination-btns">
                    <button>
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="active">1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggles = document.querySelectorAll(".custom-toggle");

            toggles.forEach((toggle) => {
                toggle.addEventListener("click", function (e) {
                    e.stopPropagation();
                    const menu = this.parentElement.querySelector(".custom-dropdown-menu");

                    // Close other open dropdowns
                    document.querySelectorAll(".custom-dropdown-menu").forEach((m) => {
                        if (m !== menu) m.style.display = "none";
                    });

                    // Toggle current dropdown
                    menu.style.display = menu.style.display === "block" ? "none" : "block";
                });
            });

            // Hide dropdown if clicked outside
            document.addEventListener("click", function () {
                document.querySelectorAll(".custom-dropdown-menu").forEach((menu) => {
                    menu.style.display = "none";
                });
            });
        });
    </script>
@endpush
