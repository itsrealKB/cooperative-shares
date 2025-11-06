@extends('layouts.vendor.app')

@push('styles')
    <style>
        label.error {
            color: crimson;
            font-family: var(--outfit-font);
            font-weight: 500;
            margin-top: 8px;
        }

        .propInput,
        .propTextarea,
        .propSelect {
            margin-bottom: 0px !important;
        }

        .propFormGroup {
            margin-bottom: 30px;
        }
    </style>
@endpush

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">Add New Property</h1>
        <!-- Price Options -->
        <form id="listing-form">
            @csrf
            <div class="standard-listing-wrapper">
                <div class="standard-mini-wrapper">
                    <label for="standard-listing" class="label-para">
                        <div class="radio-wrapper">
                            <label class="property-radio-label">
                                <input type="radio" name="listing" value="simple" id="simple-listing" checked/>
                                <span class="custom-radio"></span>
                                <p class="property-para">Simple Listing</p>
                            </label>
                        </div>
                        <p class="price-para">$0</p>
                    </label>
                </div>
                <div class="standard-mini-wrapper">
                    <label for="standard-listing" class="label-para">
                        <div class="radio-wrapper">
                            <label class="property-radio-label">
                                <input type="radio" name="listing" value="standard" id="standard-listing">
                                <span class="custom-radio"></span>
                                <p class="property-para">Standard Listing</p>
                            </label>
                        </div>
                        <p class="price-para">$149.00</p>
                    </label>
                </div>
                <div class="standard-mini-wrapper">
                    <label for="standard-listing" class="label-para">
                        <div class="radio-wrapper">
                            <label class="property-radio-label">
                                <input type="radio" name="listing" value="featured" id="featured-listing">
                                <span class="custom-radio"></span>
                                <p class="property-para">Featured Listing</p>
                            </label>
                        </div>
                        <p class="price-para">$349.00</p>
                    </label>
                </div>
            </div>

            <div class="propFormContainer">
                <h2 class="view-hd">Overview</h2>
                <div class="propFormGroup">
                    <label for="property-title" class="propLabel requiredMark">Property Title</label>
                    <input type="text" id="property-title" name="property_title" class="propInput">
                </div>
                <div class="propFormGroup">
                    <label for="description" class="propLabel requiredMark">Description</label>
                    <textarea id="description" name="description" class="propTextarea"
                        placeholder="Write about property..."></textarea>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="category" class="propLabel requiredMark">Category</label>
                        <select id="category" name="category" class="propSelect">
                            <option value="apartment">Apartment</option>
                            <option value="commercial">Commercial</option>
                            <option value="land-or-plot">Land or Plot</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="listed-in" class="propLabel requiredMark">Listed in</label>
                        <select id="listed-in" name="listed_in" class="propSelect">
                            <option value="all-listings">All Listings</option>
                        </select>
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="price" class="propLabel requiredMark">Price</label>
                        <input type="number" id="price" name="price" value="" class="propInput" placeholder="Your Price">
                    </div>
                    <div class="propFormGroup">
                        <label for="tax-rate" class="propLabel requiredMark">Yearly Tax Rate</label>
                        <input type="number" id="tax-rate" name="tax_rate" class="propInput" placeholder="Tax Rate">
                    </div>
                </div>
            </div>

            <div class="propFormContainer">
                <h2 class="view-hd">Listing Details</h2>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="size-in-ft" class="propLabel requiredMark">Size in ft</label>
                        <input type="text" id="size-in-ft" name="size_in_ft" class="propInput" placeholder="Ex.3,210 sqft">
                    </div>
                    <div class="propFormGroup">
                        <label for="bedrooms" class="propLabel requiredMark">Bedrooms</label>
                        <select id="bedrooms" name="bedrooms" class="propSelect">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="10+">10+</option>
                        </select>
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="bathrooms" class="propLabel requiredMark">Bathrooms</label>
                        <select id="bathrooms" name="bathrooms" class="propSelect">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="10+">10+</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="kitchens" class="propLabel requiredMark">Kitchens</label>
                        <select id="kitchens" name="kitchens" class="propSelect">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="5+">5+</option>
                        </select>
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="garages" class="propLabel requiredMark">Garages</label>
                        <select id="garages" name="garages" class="propSelect">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="3+">3+</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="garage-size" class="propLabel requiredMark">Garage Size</label>
                        <input type="text" id="garage-size" name="garage_size" class="propInput"
                            placeholder="Ex.3,210 sqft">
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="year-built" class="propLabel requiredMark">Year Built</label>
                        <input type="date" id="year-built" name="year_built" class="propInput" />
                    </div>
                    <div class="propFormGroup">
                        <label for="floors" class="propLabel requiredMark">Floors No</label>
                        <select id="floors" name="floors" class="propSelect">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="10+">10+</option>
                        </select>
                    </div>
                </div>
                <div class="propFormGroup">
                    <label for="listing-description" class="propLabel requiredMark">Description</label>
                    <textarea id="listing-description" name="listing_description" class="propTextarea"
                        placeholder="Write about property..."></textarea>
                </div>
            </div>

            <div class="custom-upload-wrapper">
                <h2 class="view-hd">Photo & Video Attachment</h2>

                {{-- <div id="custom-file-list" class="custom-file-list">
                    File Items Shown Here
                </div> --}}

                <div class="custom-upload-footer">
                    <label class="custom-upload-btn">
                        <input type="file" id="custom-file-input" name="files[]" multiple hidden />
                        <span id="upload-files"><img src="{{ asset('assets/vendor/images/listing-add-btn.png') }}" alt="">
                            Upload File</span>
                    </label>
                    <small>Upload file .jpg, .png, .mp4</small>
                </div>
            </div>

            <div class="custom-upload-wrapper">
                <h2 class="view-hd">Select Amenities</h2>
                <div class="amenities">
                    <div class="amenity-item"><input type="checkbox" name="ac" value="ac" id="ac"> A/C & Heating</div>
                    <div class="amenity-item"><input type="checkbox" name="garages" value="garages" id="garages"> Garages
                    </div>
                    <div class="amenity-item"><input type="checkbox" name="pool" value="pool" id="pool"> Swimming Pool</div>
                    <div class="amenity-item"><input type="checkbox" name="parking" value="parking" id="parking"> Parking
                    </div>
                    <div class="amenity-item"><input type="checkbox" name="lakeview" value="lakeview" id="lakeview"> Lake
                        View</div>
                    <div class="amenity-item"><input type="checkbox" name="garden" value="garden" id="garden"> Garden</div>
                    <div class="amenity-item"><input type="checkbox" name="fireplace" value="fireplace" id="fireplace">
                        Fireplace</div>
                    <div class="amenity-item"><input type="checkbox" name="pet" value="pet" id="pet"> Pet Friendly</div>
                    <div class="amenity-item"><input type="checkbox" name="ceiling" value="ceiling" id="ceiling"> Ceiling
                        Height</div>
                    <div class="amenity-item"><input type="checkbox" name="shower" value="shower" id="shower"> Outdoor
                        Shower</div>
                    <div class="amenity-item"><input type="checkbox" name="refrigerator" value="refrigerator"
                            id="refrigerator"> Refrigerator</div>
                    <div class="amenity-item"><input type="checkbox" name="dryer" value="dryer" id="dryer"> Dryer</div>
                    <div class="amenity-item"><input type="checkbox" name="wifi" value="wifi" id="wifi"> Wifi</div>
                    <div class="amenity-item"><input type="checkbox" name="tv" value="tv" id="tv"> TV Cable</div>
                    <div class="amenity-item"><input type="checkbox" name="bbq" value="bbq" id="bbq"> Barbeque</div>
                    <div class="amenity-item"><input type="checkbox" name="laundry" value="laundry" id="laundry"> Laundry
                    </div>
                    <div class="amenity-item"><input type="checkbox" name="accessible" value="accessible" id="accessible">
                        Disable Access</div>
                    <div class="amenity-item"><input type="checkbox" name="lawn" value="lawn" id="lawn"> Lawn</div>
                    <div class="amenity-item"><input type="checkbox" name="elevator" value="elevator" id="elevator">
                        Elevator</div>
                </div>
            </div>

            <div class="propFormContainer">
                <h2 class="view-hd">Address & Location</h2>
                <div class="propFormGroup">
                    <label for="address" class="propLabel requiredMark">Address</label>
                    <input type="text" id="address" name="address" class="propInput" placeholder="19 yawkey Way">
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="country" class="propLabel requiredMark">Country</label>
                        <select id="country" name="country" class="propSelect">
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="state" class="propLabel requiredMark">State</label>
                        <select id="state" name="state" class="propSelect">
                            <option value="Maine">Maine</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="city" class="propLabel requiredMark">City</label>
                        <select id="city" name="city" class="propSelect">
                            <option value="Boston">Boston</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="zip-code" class="propLabel requiredMark">Zip Code</label>
                        <input type="number" id="zip-code" name="zip_code" class="propInput" placeholder="7078">
                    </div>
                </div>

                <div class="propFormGroup">
                    <label for="map-location" class="propLabel requiredMark">Map Location</label>
                    <input type="text" id="map-location" name="map_location" class="propInput"
                        placeholder="XC23+6XC, Moiran, N105">
                </div>
                <div class="propFormGroup">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14474.552842670242!2d67.0583741!3d24.91031945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1754333400866!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <button class="add-btn">Submit Now</button>
            </div>
        </form>

    </section>
@endsection

@push('scripts')
    {{--
    <script>
        const fileInput = document.getElementById("custom-file-input");
        const fileList = document.getElementById("custom-file-list");

        fileInput.addEventListener("change", function () {
            const files = Array.from(fileInput.files);

            files.forEach((file) => {
                const item = document.createElement("div");
                item.className = "custom-file-item";

                const fileName = document.createElement("span");
                fileName.textContent = file.name;

                const removeBtn = document.createElement("button");
                removeBtn.innerHTML = "×";
                removeBtn.onclick = () => item.remove();

                item.appendChild(fileName);
                item.appendChild(removeBtn);
                fileList.appendChild(item);
            });

            // fileInput.value = ""; // Clear input
        });
    </script> --}}
    <script>
        document.querySelectorAll('.standard-mini-wrapper').forEach(wrapper => {
            wrapper.addEventListener('click', () => {
                const radio = wrapper.querySelector('input[type="radio"]');
                if (radio) radio.checked = true;
                console.log(radio);
            });
        });
    </script>
    <script>
        const amenityItems = document.querySelectorAll('.amenity-item');
        const selectedAmenities = [];

        amenityItems.forEach(item => {
            item.addEventListener('click', () => {
                const checkbox = item.querySelector('input[type="checkbox"]');

                // Toggle checkbox manually
                checkbox.checked = !checkbox.checked;

                const value = checkbox.value;

                // Update selectedAmenities array
                if (checkbox.checked) {
                    if (!selectedAmenities.includes(value)) {
                        selectedAmenities.push(value);
                    }
                } else {
                    const index = selectedAmenities.indexOf(value);
                    if (index > -1) {
                        selectedAmenities.splice(index, 1);
                    }
                }

                console.log(selectedAmenities); // 🔹 View current array
            });
        });
    </script>

    {{-- Listing Form Validation --}}
    <script>
        $('#listing-form').validate({
            rules: {

                property_title: {
                    required: true
                },

                description: {
                    required: true
                },

                price: {
                    required: true,
                    number: true
                },

                tax_rate: {
                    required: true,
                    number: true
                },

                size_in_ft: {
                    required: true,
                },

                garage_size: {
                    required: true,
                },

                year_built: {
                    required: true,
                },

                listing_description: {
                    required: true,
                },

                address: {
                    required: true,
                },

                zip_code: {
                    required: true,
                },

                map_location: {
                    required: true,
                },
            },
            messages: {

                property_title: {
                    required: 'Please Enter Property Title!'
                },

                description: {
                    required: 'Please Enter Overview Description!'
                },

                price: {
                    required: 'Please Enter Price!',
                    number: 'Price Should Be In Numbers!'
                },

                tax_rate: {
                    required: 'Please Enter Tax Rate!',
                    number: 'Tax Rate Should Be In Numbers!'
                },

                size_in_ft: {
                    required: 'Please Enter Property Size!',
                },

                garage_size: {
                    required: 'Please Choose Garage Size!',
                },

                year_built: {
                    required: 'Please Provide Built Year!',
                },

                listing_description: {
                    required: 'Please Enter Listing Description!',
                },

                address: {
                    required: 'Please Enter Property Address!',
                },

                zip_code: {
                    required: 'Please Enter Zip Code!',
                },

                map_location: {
                    required: 'Please Enter Map Location!',
                },
            },
        });
    </script>
    {{-- Listing Form Validation --}}

    {{-- Validating File Types --}}
    <script>
        let flag = false;
        $('#custom-file-input').on('change', function () {
            let filesInput = this;
            const allowedTypes = ['image/png', 'image/jpg', 'video/mp4'];
            const fileList = $("#custom-file-list")[0];

            if (filesInput.files.length) {
                const files = Array.from(filesInput.files);
                const validFiles = [];
                files.forEach(file => {
                    if (!allowedTypes.includes(file.type)) {
                        Swal.fire({
                            title: "Error!",
                            text: `File Type Of ${file.name} Is Not Allowed, Allowed Types Are (png, jpg, mp4).`,
                            icon: 'error',
                            confirmButtonColor: '#295568',
                            confirmButtonText: 'OK'
                        });
                    }
                    else {
                        validFiles.push(file);
                    }
                });

                if(files.length === validFiles.length){
                    flag = true;
                }
            }
            else {
                Swal.fire({
                    title: "Error!",
                    text: 'Please Upload A File First',
                    icon: 'error',
                    confirmButtonColor: '#295568',
                    confirmButtonText: 'OK'
                });
            }

        });
    </script>
    {{-- Validating File Types --}}

    {{-- Listing Form Submittion --}}
    <script>
        $(document).ready(function () {
            $('#listing-form').on('submit', function (e) {
                if (!$(this).valid() || !flag) {

                    Swal.fire({
                        title: "Error!",
                        text: 'Please Upload A File!',
                        icon: 'error',
                        confirmButtonColor: '#295568',
                        confirmButtonText: 'OK'
                    });

                    return false;
                }
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('vendor.listing.store') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $.LoadingOverlay('show');
                    },
                    success: function (response) {
                        $.LoadingOverlay('hide');
                        // if (response.status) {
                        //     Swal.fire({
                        //         title: "Info!",
                        //         text: response.message,
                        //         icon: 'info',
                        //         confirmButtonColor: '#295568',
                        //         confirmButtonText: 'OK'
                        //     }).then(() => {
                        //         window.location.reload();
                        //     });
                        // }
                        console.log(response);
                    },
                    error: function (error) {
                        $.LoadingOverlay('hide');
                        let message = (error.responseJSON?.message) ? error.responseJSON?.message : error.statusText;
                        Swal.fire({
                            title: 'Something Went Wrong!',
                            text: message,
                            icon: 'error',
                            confirmButtonColor: '#295568',
                            confirmButtonText: 'OK'
                        });
                    }
                })
            });
        });
    </script>
    {{-- Listing Form Submittion --}}

@endpush
