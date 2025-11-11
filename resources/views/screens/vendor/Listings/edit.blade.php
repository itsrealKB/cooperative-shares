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
        <h1 class="dashboard-hd">Update Property</h1>
        <!-- Price Options -->
        <form id="listing-form">
            @csrf
            <div class="standard-listing-wrapper">
                <div class="standard-mini-wrapper">
                    <label for="simple-listing" class="label-para">
                        <div class="radio-wrapper">
                            <label class="property-radio-label">
                                <input type="radio" name="listing" value="simple" id="simple-listing" {{ ($listing->listing == 'simple') ? 'checked' : '' }} />
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
                                <input type="radio" name="listing" value="standard" id="standard-listing" {{ ($listing->listing == 'standard') ? 'checked' : '' }} />
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
                                <input type="radio" name="listing" value="featured" id="featured-listing" {{ ($listing->listing == 'featured') ? 'checked' : '' }} />
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
                    <input type="text" id="property-title" name="property_title" value="{{ $listing->property_title }}"
                        class="propInput">
                </div>
                <div class="propFormGroup">
                    <label for="description" class="propLabel requiredMark">Description</label>
                    <textarea id="description" name="description" class="propTextarea"
                        placeholder="Write about property...">{{ $listing->description }}</textarea>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="category" class="propLabel requiredMark">Category</label>
                        <select id="category" name="category" class="propSelect">
                            <option value="apartment" {{ ($listing->category == 'apartment') ? 'selected' : '' }}>Apartment
                            </option>
                            <option value="commercial" {{ ($listing->category == 'commercial') ? 'selected' : '' }}>Commercial
                            </option>
                            <option value="land-or-plot" {{ ($listing->category == 'land-or-plot') ? 'selected' : '' }}>Land
                                or Plot</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="listed-in" class="propLabel requiredMark">Listed Type</label>
                        <select id="listed-in" name="listed_in" class="propSelect">
                            <option value="Full Ownership" {{ ($listing->listed_in == 'Full Ownership') ? 'selected' : '' }}>
                                Full Ownership</option>
                            <option value="Co-Op Share" {{ ($listing->listed_in == 'Co-Op Share') ? 'selected' : '' }}>Co-Op
                                Share</option>
                        </select>
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="price" class="propLabel requiredMark">Price</label>
                        <input type="number" id="price" name="price" value="{{ $listing->price }}" class="propInput"
                            placeholder="Your Price">
                    </div>
                    <div class="propFormGroup">
                        <label for="tax-rate" class="propLabel requiredMark">Yearly Tax Rate</label>
                        <input type="number" id="tax-rate" name="tax_rate" value="{{ $listing->tax_rate }}"
                            class="propInput" placeholder="Tax Rate">
                    </div>
                </div>
            </div>

            <div class="propFormContainer">
                <h2 class="view-hd">Listing Details</h2>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="size-in-ft" class="propLabel requiredMark">Size in ft</label>
                        <input type="text" id="size-in-ft" name="size_in_ft" value="{{ $listing->size_in_ft }}"
                            class="propInput" placeholder="Ex.3,210 sqft">
                    </div>
                    <div class="propFormGroup">
                        <label for="bedrooms" class="propLabel requiredMark">Bedrooms</label>
                        <select id="bedrooms" name="bedrooms" class="propSelect">
                            <option value="1" {{ ($listing->bedrooms == '1') ? 'selected' : '' }}>01</option>
                            <option value="2" {{ ($listing->bedrooms == '2') ? 'selected' : '' }}>02</option>
                            <option value="3" {{ ($listing->bedrooms == '3') ? 'selected' : '' }}>03</option>
                            <option value="4" {{ ($listing->bedrooms == '4') ? 'selected' : '' }}>04</option>
                            <option value="5" {{ ($listing->bedrooms == '5') ? 'selected' : '' }}>05</option>
                            <option value="6" {{ ($listing->bedrooms == '6') ? 'selected' : '' }}>06</option>
                            <option value="7" {{ ($listing->bedrooms == '7') ? 'selected' : '' }}>07</option>
                            <option value="8" {{ ($listing->bedrooms == '8') ? 'selected' : '' }}>08</option>
                            <option value="9" {{ ($listing->bedrooms == '9') ? 'selected' : '' }}>09</option>
                            <option value="10" {{ ($listing->bedrooms == '10') ? 'selected' : '' }}>10</option>
                            <option value="10+" {{ ($listing->bedrooms == '10+') ? 'selected' : '' }}>10+</option>
                        </select>
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="bathrooms" class="propLabel requiredMark">Bathrooms</label>
                        <select id="bathrooms" name="bathrooms" class="propSelect">
                            <option value="1" {{ ($listing->bathrooms == '1') ? 'selected' : '' }}>01</option>
                            <option value="2" {{ ($listing->bathrooms == '2') ? 'selected' : '' }}>02</option>
                            <option value="3" {{ ($listing->bathrooms == '3') ? 'selected' : '' }}>03</option>
                            <option value="4" {{ ($listing->bathrooms == '4') ? 'selected' : '' }}>04</option>
                            <option value="5" {{ ($listing->bathrooms == '5') ? 'selected' : '' }}>05</option>
                            <option value="6" {{ ($listing->bathrooms == '6') ? 'selected' : '' }}>06</option>
                            <option value="7" {{ ($listing->bathrooms == '7') ? 'selected' : '' }}>07</option>
                            <option value="8" {{ ($listing->bathrooms == '8') ? 'selected' : '' }}>08</option>
                            <option value="9" {{ ($listing->bathrooms == '9') ? 'selected' : '' }}>09</option>
                            <option value="10" {{ ($listing->bathrooms == '10') ? 'selected' : '' }}>10</option>
                            <option value="10+" {{ ($listing->bathrooms == '10+') ? 'selected' : '' }}>10+</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="kitchens" class="propLabel requiredMark">Kitchens</label>
                        <select id="kitchens" name="kitchens" class="propSelect">
                            <option value="1" {{ ($listing->kitchens == '1') ? 'selected' : '' }}>01</option>
                            <option value="2" {{ ($listing->kitchens == '2') ? 'selected' : '' }}>02</option>
                            <option value="3" {{ ($listing->kitchens == '3') ? 'selected' : '' }}>03</option>
                            <option value="4" {{ ($listing->kitchens == '4') ? 'selected' : '' }}>04</option>
                            <option value="5" {{ ($listing->kitchens == '5') ? 'selected' : '' }}>05</option>
                            <option value="5+" {{ ($listing->kitchens == '5+') ? 'selected' : '' }}>5+</option>
                        </select>
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="garages" class="propLabel requiredMark">Garages</label>
                        <select id="garages" name="garages" class="propSelect">
                            <option value="1" {{ ($listing->garages == '1') ? 'selected' : '' }}>01</option>
                            <option value="2" {{ ($listing->garages == '2') ? 'selected' : '' }}>02</option>
                            <option value="3" {{ ($listing->garages == '3') ? 'selected' : '' }}>03</option>
                            <option value="3+" {{ ($listing->garages == '3+') ? 'selected' : '' }}>3+</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="garage-size" class="propLabel requiredMark">Garage Size</label>
                        <input type="text" id="garage-size" name="garage_size" value="{{ $listing->garage_size }}"
                            class="propInput" placeholder="Ex.3,210 sqft">
                    </div>
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="year-built" class="propLabel requiredMark">Year Built</label>
                        <input type="date" id="year-built" name="year_built" value="{{ $listing->year_built }}"
                            class="propInput" />
                    </div>
                    <div class="propFormGroup">
                        <label for="floors" class="propLabel requiredMark">Floors No</label>
                        <select id="floors" name="floors" class="propSelect">
                            <option value="1" {{ ($listing->floors == '1') ? 'selected' : '' }}>01</option>
                            <option value="2" {{ ($listing->floors == '2') ? 'selected' : '' }}>02</option>
                            <option value="3" {{ ($listing->floors == '3') ? 'selected' : '' }}>03</option>
                            <option value="4" {{ ($listing->floors == '4') ? 'selected' : '' }}>04</option>
                            <option value="5" {{ ($listing->floors == '5') ? 'selected' : '' }}>05</option>
                            <option value="6" {{ ($listing->floors == '6') ? 'selected' : '' }}>06</option>
                            <option value="7" {{ ($listing->floors == '7') ? 'selected' : '' }}>07</option>
                            <option value="8" {{ ($listing->floors == '8') ? 'selected' : '' }}>08</option>
                            <option value="9" {{ ($listing->floors == '9') ? 'selected' : '' }}>09</option>
                            <option value="10" {{ ($listing->floors == '10') ? 'selected' : '' }}>10</option>
                            <option value="10+" {{ ($listing->floors == '10+') ? 'selected' : '' }}>10+</option>
                        </select>
                    </div>
                </div>
                <div class="propFormGroup">
                    <label for="listing-description" class="propLabel requiredMark">Description</label>
                    <textarea id="listing-description" name="listing_description" class="propTextarea"
                        placeholder="Write about property...">{{ $listing->listing_description }}</textarea>
                </div>
            </div>

            <div class="custom-upload-wrapper">
                <h2 class="view-hd">Main Image</h2>
                <div class="custom-file-list">
                    @if($listing->main_image)
                        <div class="custom-file-item" id="main-image">
                            <img src="{{ asset('storage/' . $listing->main_image) }}" alt="Main Image" style="width:200px;" />
                            <button type="button" id="delete-main-img">×</button>
                        </div>
                    @endif
                </div>
                <div class="custom-upload-footer mb-5">
                    <label class="custom-upload-btn">
                        <input type="file" id="custom-image-input" name="main_image" hidden />
                        <span id="upload-files"><img src="{{ asset('assets/vendor/images/listing-add-btn.png') }}" alt="">
                            Upload Image</span>
                    </label>
                    <small>Upload Image .jpg, .png</small>
                </div>
                <hr />
                <h2 class="view-hd mt-5">Photo & Video Attachment</h2>
                <div id="custom-file-list" class="custom-file-list">
                    @if(json_decode($listing->files))
                        @foreach(json_decode($listing->files) as $file)
                            <div class="custom-file-item">
                                <span>{{ $file->name }}</span>
                                <button type="button" class="delete-file" data-path="{{ $file->path }}">×</button>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="custom-upload-footer">
                    <label class="custom-upload-btn" id="files-container">
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
                    <div class="amenity-item"><input type="checkbox" name="has_ac" value="ac" id="ac" {{ ($listing->has_ac != null) ? 'checked' : '' }} />A/C & Heating</div>
                    <div class="amenity-item"><input type="checkbox" name="has_garages" value="garages" id="garages" {{ ($listing->has_garages != null) ? 'checked' : '' }} />Garages</div>
                    <div class="amenity-item"><input type="checkbox" name="has_pool" value="pool" id="pool" {{ ($listing->has_pool != null) ? 'checked' : '' }} />Swimming Pool</div>
                    <div class="amenity-item"><input type="checkbox" name="has_parking" value="parking" id="parking" {{ ($listing->has_parking != null) ? 'checked' : '' }} />Parking</div>
                    <div class="amenity-item"><input type="checkbox" name="has_lakeview" value="lakeview" id="lakeview" {{ ($listing->has_lakeview != null) ? 'checked' : '' }} />Lake View</div>
                    <div class="amenity-item"><input type="checkbox" name="has_garden" value="garden" id="garden" {{ ($listing->has_garden != null) ? 'checked' : '' }} />Garden</div>
                    <div class="amenity-item"><input type="checkbox" name="has_fireplace" value="fireplace" id="fireplace"
                            {{ ($listing->has_fireplace != null) ? 'checked' : '' }} />Fireplace</div>
                    <div class="amenity-item"><input type="checkbox" name="has_pet" value="pet" id="pet" {{ ($listing->has_pet != null) ? 'checked' : '' }} />Pet Friendly</div>
                    <div class="amenity-item"><input type="checkbox" name="has_ceiling" value="ceiling" id="ceiling" {{ ($listing->has_ceiling != null) ? 'checked' : '' }} />Ceiling Height</div>
                    <div class="amenity-item"><input type="checkbox" name="has_shower" value="shower" id="shower" {{ ($listing->has_shower != null) ? 'checked' : '' }} />Outdoor Shower</div>
                    <div class="amenity-item"><input type="checkbox" name="has_refrigerator" value="refrigerator"
                            id="refrigerator" {{ ($listing->has_refrigerator != null) ? 'checked' : '' }} />Refrigerator
                    </div>
                    <div class="amenity-item"><input type="checkbox" name="has_dryer" value="dryer" id="dryer" {{ ($listing->has_dryer != null) ? 'checked' : '' }} />Dryer</div>
                    <div class="amenity-item"><input type="checkbox" name="has_wifi" value="wifi" id="wifi" {{ ($listing->has_wifi != null) ? 'checked' : '' }} />Wifi</div>
                    <div class="amenity-item"><input type="checkbox" name="has_tv" value="tv" id="tv" {{ ($listing->has_tv != null) ? 'checked' : '' }} />TV Cable</div>
                    <div class="amenity-item"><input type="checkbox" name="has_bbq" value="bbq" id="bbq" {{ ($listing->has_bbq != null) ? 'checked' : '' }} />Barbeque</div>
                    <div class="amenity-item"><input type="checkbox" name="has_laundry" value="laundry" id="laundry" {{ ($listing->has_laundry != null) ? 'checked' : '' }} />Laundry</div>
                    <div class="amenity-item"><input type="checkbox" name="has_accessible" value="accessible"
                            id="accessible" {{ ($listing->has_accessible != null) ? 'checked' : '' }} />Disable Access</div>
                    <div class="amenity-item"><input type="checkbox" name="has_lawn" value="lawn" id="lawn" {{ ($listing->has_lawn != null) ? 'checked' : '' }} />Lawn</div>
                    <div class="amenity-item"><input type="checkbox" name="has_elevator" value="elevator" id="elevator" {{ ($listing->has_elevator != null) ? 'checked' : '' }} />Elevator</div>
                </div>
            </div>

            <div class="propFormContainer">
                <h2 class="view-hd">Address & Location</h2>
                <div class="propFormGroup">
                    <label for="address" class="propLabel requiredMark">Address</label>
                    <input type="text" id="address" name="address" value="{{ $listing->address }}" class="propInput"
                        placeholder="19 yawkey Way">
                </div>
                <div class="prop-wrapper">
                    <div class="propFormGroup">
                        <label for="country" class="propLabel requiredMark">Country</label>
                        <select id="country" name="country" class="propSelect" autocomplete="true" disabled>
                            <option value="United States">United States</option>
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="state" class="propLabel requiredMark">State</label>
                        <select id="state" name="state" class="propSelect" autocomplete="true">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->name }}" data-id="{{ $state->id }}" {{ ($state->name === $listing->state) ? 'selected' : '' }}>{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="city" class="propLabel requiredMark">City</label>
                        <select id="city" name="city" class="propSelect">
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->name }}" data-id="{{ $city->id }}" {{ ($city->name === $listing->city) ? 'selected' : '' }}>{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="propFormGroup">
                        <label for="zip-code" class="propLabel requiredMark">Zip Code</label>
                        <input type="number" id="zip-code" name="zip_code" value="{{ $listing->zip_code }}"
                            class="propInput" placeholder="7078">
                    </div>
                </div>

                <div class="propFormGroup">
                    <label for="map-location" class="propLabel requiredMark">Map Location</label>
                    <input type="text" id="map-location" name="map_location" value="{{ $listing->map_location }}"
                        class="propInput" placeholder="XC23+6XC, Moiran, N105">
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

    {{-- Deleting Main Image --}}
    <script>
        $(document).ready(function () {
            $('#delete-main-img').on('click', function () {
                let button = $(this);
                Swal.fire({
                    title: "Warning!",
                    text: "Are You Sure You Want To Delete The Main Image?",
                    icon: 'warning',
                    confirmButtonColor: '#295568',
                    confirmButtonText: 'OK',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        let formData = new FormData();
                        formData.append('_token', "{{ csrf_token() }}");
                        formData.append('_method', 'delete');
                        $.ajax({
                            url: "{{ route('vendor.listing.main.image.delete', $listing->id) }}",
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            beforeSend: function () {
                                $.LoadingOverlay('show');
                            },
                            success: function (response) {
                                $.LoadingOverlay('hide');
                                if (response.status) {
                                    Swal.fire({
                                        title: "Info!",
                                        text: response.message,
                                        icon: 'info',
                                        confirmButtonColor: '#295568',
                                        confirmButtonText: 'OK'
                                    }).then(() => {
                                        // window.location.reload();
                                        button.closest('.custom-file-item').remove();
                                    });
                                }
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
                        });
                    }
                    else {
                        return false;
                    }
                });
            });
        })
    </script>
    {{-- Deleting Main Image --}}

    {{-- Validating File Types --}}
    <script>
        let flag = false;
        let filesContainer = $('#custom-file-list');
        if (filesContainer.children().length > 0) {
            flag = true;
            $(document).on('click', '.delete-file', function () {
                let path = $(this).data('path');
                let button = $(this);
                Swal.fire({
                    title: "Warning!",
                    text: "Are You Sure You Want To Delete The File?",
                    icon: 'warning',
                    confirmButtonColor: '#295568',
                    confirmButtonText: 'OK',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        let formData = new FormData();
                        formData.append('_token', "{{ csrf_token() }}");
                        formData.append('_method', 'delete');
                        formData.append('file_path', path);
                        $.ajax({
                            url: "{{ route('vendor.listing.file.delete', $listing->id) }}",
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            beforeSend: function () {
                                $.LoadingOverlay('show');
                            },
                            success: function (response) {
                                $.LoadingOverlay('hide');
                                if (response.status) {
                                    Swal.fire({
                                        title: "Info!",
                                        text: response.message,
                                        icon: 'info',
                                        confirmButtonColor: '#295568',
                                        confirmButtonText: 'OK'
                                    }).then(() => {
                                        // window.location.reload();
                                        button.closest('.custom-file-item').remove();
                                        if(filesContainer.children().length <= 0) flag = false;
                                    });
                                }
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
                        });
                    }
                    else {
                        return false;
                    }
                });
            });
        }
        else {
            flag = false;
        }

        $('#custom-file-input').on('change', function () {
            let filesInput = this;
            const allowedTypes = ['image/png', 'image/jpg', 'video/mp4'];

            if (filesInput.files.length) {
                const files = Array.from(filesInput.files);
                const validFiles = [];
                files.forEach(file => {
                    if (!allowedTypes.includes(file.type)) {
                        Swal.fire({
                            title: "Error!",
                            text: `File Type Of (${file.name}) Is Not Allowed, Allowed Types Are (png, jpg, mp4).`,
                            icon: 'error',
                            confirmButtonColor: '#295568',
                            confirmButtonText: 'OK'
                        });
                    }
                    else {
                        if (file.size < (20 * 1024 * 1024)) {

                            validFiles.push(file);
                        }
                        else {
                            Swal.fire({
                                title: "Error!",
                                text: `File Size Of (${file.name}) Exceed 20MB Limit, Allowed Limit Is 20MB.`,
                                icon: 'error',
                                confirmButtonColor: '#295568',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });

                if (files.length === validFiles.length) {
                    flag = true;
                }
            }
            // else {
            //     Swal.fire({
            //         title: "Error!",
            //         text: 'Please Upload A File First',
            //         icon: 'error',
            //         confirmButtonColor: '#295568',
            //         confirmButtonText: 'OK'
            //     });
            // }
        });
    </script>
    {{-- Validating File Types --}}

    {{-- Listing Form Submittion --}}
    <script>
        $(document).ready(function () {
            $('#listing-form').on('submit', function (e) {
                let filesContainer = $('#custom-file-list');
                // if(filesContainer.children().length <= 0)  flag = false;
                if (!$(this).valid()) {
                    return false;
                }
                else if(!flag)
                {
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
                let mainImageContainer = $('#main-image');
                let mainImage = $('#custom-image-input')[0];
                const allowedTypes = ['image/png', 'image/jpg'];

                if (!mainImageContainer.length) {
                    if (mainImage.files.length) {
                        if (!allowedTypes.includes(mainImage.files[0].type)) {
                            Swal.fire({
                                title: "Error!",
                                text: 'Main Image File Type Is Invalid!',
                                icon: 'error',
                                confirmButtonColor: '#295568',
                                confirmButtonText: 'OK'
                            });

                            return false;
                        }
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: 'Please Upload Main Image!',
                            icon: 'error',
                            confirmButtonColor: '#295568',
                            confirmButtonText: 'OK'
                        });
                        return false;
                    }
                }
                let formData = new FormData(this);
                formData.append('_method', 'PUT')
                $.ajax({
                    url: "{{ route('vendor.listing.update', $listing->id) }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $.LoadingOverlay('show');
                    },
                    success: function (response) {
                        $.LoadingOverlay('hide');
                        if (response.status) {
                            Swal.fire({
                                title: "Info!",
                                text: response.message,
                                icon: 'info',
                                confirmButtonColor: '#295568',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.reload();
                            });
                        }
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
