@extends('layouts.user.app')

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">Dashboard</h1>
        <div class="row">
            <div class="col-xxl-5 col-lg-6 col-md-5 col-sm-12">
                <div class="map-wrapper">
                    <div class="listing-wrapp">
                        <div class="listing-box">
                            <div>
                                <h4>View Listings</h4>
                                <h5>20432</h5>
                            </div>
                            <div>
                                <canvas id="myDonutChart"></canvas>
                            </div>
                        </div>
                        <div class="listing-box listing-box2">
                            <div>
                                <h4>Appointments</h4>
                                <h5>20432</h5>
                            </div>
                            <div>
                                <canvas id="myDonutChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-lg-6 col-md-7 col-sm-12">
                <div class="map-side position-relative">
                    <div id="map2"></div>
                </div>
            </div>
        </div>
        <!-- <div class="map-wrapper">


                </div> -->
        <h1 class="dashboard-hd">Save Listings</h1>
        <div class="listing-card-wrapper">
            <div class="property-card">
                <div class="img-area position-relative">
                    <img src="{{ asset('assets/user/images/Container2.png') }}" alt="" class="img-fluid">
                    <div class="property-card-badge3">XYZ cooperative</div>
                    <button class="btn heart-save-btn p-0">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                    <img src="{{ asset('assets/user/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                </div>
                <div class="property-card-body">
                    <div class="property-name position-relative">
                        <h3>Homes For Sale</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                        <div class="property-card-badge">Co-Op Share</div>
                    </div>
                    <div class="other-desc">
                        <div class="d-flex justify-content-between">
                            <p><img src="{{ asset('assets/user/images/Vector1.png') }}" alt=""> Bed 4</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector2.png') }}" alt=""> Bath 2</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector3.png') }}" alt=""> 1500 sqft</p>
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
                    <img src="{{ asset('assets/user/images/Container2.png') }}" alt="" class="img-fluid">
                    <div class="property-card-badge3">XYZ cooperative</div>
                    <button class="btn heart-save-btn p-0">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                    <img src="{{ asset('assets/user/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                </div>
                <div class="property-card-body">
                    <div class="property-name position-relative">
                        <h3>Homes For Sale</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                        <div class="property-card-badge">Co-Op Share</div>
                    </div>
                    <div class="other-desc">
                        <div class="d-flex justify-content-between">
                            <p><img src="{{ asset('assets/user/images/Vector1.png') }}" alt=""> Bed 4</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector2.png') }}" alt=""> Bath 2</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector3.png') }}" alt=""> 1500 sqft</p>
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
                    <img src="{{ asset('assets/user/images/Container2.png') }}" alt="" class="img-fluid">
                    <div class="property-card-badge3">XYZ cooperative</div>
                    <button class="btn heart-save-btn p-0">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                    <img src="{{ asset('assets/user/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                </div>
                <div class="property-card-body">
                    <div class="property-name position-relative">
                        <h3>Homes For Sale</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                        <div class="property-card-badge">Co-Op Share</div>
                    </div>
                    <div class="other-desc">
                        <div class="d-flex justify-content-between">
                            <p><img src="{{ asset('assets/user/images/Vector1.png') }}" alt=""> Bed 4</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector2.png') }}" alt=""> Bath 2</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector3.png') }}" alt=""> 1500 sqft</p>
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
                    <img src="{{ asset('assets/user/images/Container2.png') }}" alt="" class="img-fluid">
                    <div class="property-card-badge3">XYZ cooperative</div>
                    <button class="btn heart-save-btn p-0">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                    <img src="{{ asset('assets/user/images/advertisment-badge.png') }}" alt="" class="advertisment-badge">
                </div>
                <div class="property-card-body">
                    <div class="property-name position-relative">
                        <h3>Homes For Sale</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Lorem Ipsum is simply dummy</p>
                        <div class="property-card-badge">Co-Op Share</div>
                    </div>
                    <div class="other-desc">
                        <div class="d-flex justify-content-between">
                            <p><img src="{{ asset('assets/user/images/Vector1.png') }}" alt=""> Bed 4</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector2.png') }}" alt=""> Bath 2</p>
                            <span>|</span>
                            <p><img src="{{ asset('assets/user/images/Vector3.png') }}" alt=""> 1500 sqft</p>
                        </div>
                    </div>
                    <div class="property-name d-flex justify-content-between align-items-center">
                        <h3 class="m-0">$250,800.00</h3>
                        <a href="#">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const ctx = document.getElementById('myDonutChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Remaining'],
                datasets: [{
                    data: [25, 75],
                    backgroundColor: [
                        '#ffffff',
                        '#3a6777'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                cutout: '60%',
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: false
                    }
                }
            }
        });
    </script>

    <script>
        const ctx2 = document.getElementById('myDonutChart2').getContext('2d');

        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Remaining'],
                datasets: [{
                    data: [25, 75],
                    backgroundColor: [
                        '#ffffff',
                        '#d3b892ff'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                cutout: '60%',
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: false
                    }
                }
            }
        });
    </script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD28UEoebX1hKscL3odt2TiTRVfe5SSpwE&callback=initMap" async
        defer></script> -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD28UEoebX1hKscL3odt2TiTRVfe5SSpwE&callback=initMap&loading=async"
        async defer></script>

    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map2"), {
                zoom: 2,
                center: { lat: 20, lng: 0 },
                styles: [],
            });

            const locations = [
                { lat: 6.5, lng: 3.3, number: 224, main: true },
                { lat: 40.7, lng: -74.0, number: 234 },
                { lat: -33.9, lng: 151.2, number: 234 },
                { lat: 60.0, lng: 100.0, number: 653 },
                { lat: 48.8, lng: 2.3, number: 25 },
                { lat: -15.6, lng: -47.9, number: 67 },
            ];

            locations.forEach((loc) => {
                class CustomMarker extends google.maps.OverlayView {
                    constructor(position, text, isMain) {
                        super();
                        this.position = position;
                        this.text = text;
                        this.isMain = isMain;
                        this.div = null;
                    }

                    onAdd() {
                        const div = document.createElement("div");
                        div.className = "custom-marker" + (this.isMain ? " main" : "");
                        div.textContent = this.text;

                        this.div = div;
                        const panes = this.getPanes();
                        panes.overlayMouseTarget.appendChild(div);
                    }

                    draw() {
                        const projection = this.getProjection();
                        const pos = projection.fromLatLngToDivPixel(this.position);

                        if (this.div) {
                            this.div.style.position = "absolute";
                            this.div.style.left = pos.x - this.div.offsetWidth / 2 + "px";
                            this.div.style.top = pos.y - this.div.offsetHeight / 2 + "px";
                        }
                    }

                    onRemove() {
                        if (this.div) {
                            this.div.remove();
                            this.div = null;
                        }
                    }
                }

                const marker = new CustomMarker(
                    new google.maps.LatLng(loc.lat, loc.lng),
                    loc.number,
                    loc.main
                );
                marker.setMap(map);
            });
        }

        window.initMap = initMap;
    </script>
@endpush
