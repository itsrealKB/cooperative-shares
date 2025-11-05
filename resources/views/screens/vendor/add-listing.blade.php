@extends('layouts.vendor.app')

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">Add New Property</h1>
        <!-- Price Options -->
        <div class="standard-listing-wrapper">
            <div class="standard-mini-wrapper">
                <label for="standard-listing" class="label-para">
                    <div class="radio-wrapper">
                        <label class="property-radio-label">
                            <input type="radio" name="listing" id="standard-listing1">
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
                            <input type="radio" name="listing" id="standard-listing1">
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
                            <input type="radio" name="listing" id="standard-listing2">
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
                <input type="text" id="property-title" name="property-title" value="" class="propInput">
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
                        <option value="apartments">Apartments</option>
                    </select>
                </div>
                <div class="propFormGroup">
                    <label for="listed-in" class="propLabel requiredMark">Listed in</label>
                    <select id="listed-in" name="listed-in" class="propSelect">
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
                    <input type="number" id="tax-rate" name="tax-rate" value="" class="propInput" placeholder="Tax Rate">
                </div>
            </div>
        </div>

        <div class="propFormContainer">
            <h2 class="view-hd">Listing Details</h2>
            <div class="prop-wrapper">
                <div class="propFormGroup">
                    <label for="property-title" class="propLabel requiredMark">Size in ft</label>
                    <input type="text" id="property-title" name="property-title" value="" class="propInput"
                        placeholder="Ex.3,210 sqft">
                </div>
                <div class="propFormGroup">
                    <label for="description" class="propLabel requiredMark">Bedrooms</label>
                    <select id="listed-in" name="listed-in" class="propSelect">
                        <option value="all-listings">All Listings</option>
                    </select>
                </div>
            </div>
            <div class="prop-wrapper">
                <div class="propFormGroup">
                    <label for="category" class="propLabel requiredMark">Bathrooms</label>
                    <select id="category" name="category" class="propSelect">
                        <option value="apartments">Ex.3,210 sqft</option>
                    </select>
                </div>
                <div class="propFormGroup">
                    <label for="listed-in" class="propLabel requiredMark">Kitchens</label>
                    <select id="listed-in" name="listed-in" class="propSelect">
                        <option value="all-listings">All Listings</option>
                    </select>
                </div>
            </div>
            <div class="prop-wrapper">
                <div class="propFormGroup">
                    <label for="category" class="propLabel requiredMark">Garages</label>
                    <select id="category" name="category" class="propSelect">
                        <option value="apartments">01</option>
                    </select>
                </div>
                <div class="propFormGroup">
                    <label for="listed-in" class="propLabel requiredMark">Garage Size</label>
                    <input type="text" id="property-title" name="property-title" value="" class="propInput"
                        placeholder="Ex.3,210 sqft">
                </div>
            </div>
            <div class="prop-wrapper">
                <div class="propFormGroup">
                    <label for="category" class="propLabel requiredMark">Year Built</label>
                    <select id="category" name="category" class="propSelect">
                        <option value="apartments">Type Year</option>
                    </select>
                </div>
                <div class="propFormGroup">
                    <label for="listed-in" class="propLabel requiredMark">Floors No</label>
                    <select id="category" name="category" class="propSelect">
                        <option value="apartments">All Listings</option>
                    </select>
                </div>
            </div>
            <div class="propFormGroup">
                <label for="description" class="propLabel requiredMark">Description</label>
                <textarea id="description" name="description" class="propTextarea"
                    placeholder="Write about property..."></textarea>
            </div>
        </div>

        <div class="custom-upload-wrapper">
            <h2 class="view-hd">Photo & Video Attachment</h2>

            <div id="custom-file-list" class="custom-file-list">
                <!-- Dummy file items shown by default -->
                <div class="custom-file-item">
                    <span>demo-image.jpg</span>
                    <button onclick="this.parentElement.remove()">×</button>
                </div>
                <div class="custom-file-item">
                    <span>intro-video.mp4</span>
                    <button onclick="this.parentElement.remove()">×</button>
                </div>
            </div>

            <div class="custom-upload-footer">
                <label class="custom-upload-btn">
                    <input type="file" id="custom-file-input" multiple hidden />
                    <span><img src="{{ asset('assets/vendor/images/listing-add-btn.png') }}" alt=""> Upload File</span>
                </label>
                <small>Upload file .jpg, .png, .mp4</small>
            </div>
        </div>

        <div class="custom-upload-wrapper">
            <h2 class="view-hd">Select Amenities</h2>
            <div class="amenities">
                <div class="amenity-item"><input type="checkbox" id="ac"> A/C & Heating</div>
                <div class="amenity-item"><input type="checkbox" id="garages"> Garages</div>
                <div class="amenity-item"><input type="checkbox" id="pool"> Swimming Pool</div>
                <div class="amenity-item"><input type="checkbox" id="parking"> Parking</div>
                <div class="amenity-item"><input type="checkbox" id="parking"> Lake View</div>
                <div class="amenity-item"><input type="checkbox" id="garden"> Garden</div>
                <div class="amenity-item"><input type="checkbox" id="fireplace"> Fireplace</div>
                <div class="amenity-item"><input type="checkbox" id="pet"> Pet Friendly</div>
                <div class="amenity-item"><input type="checkbox" id="ceiling"> Ceiling Height</div>
                <div class="amenity-item"><input type="checkbox" id="ceiling"> Outdoor Shower</div>
                <div class="amenity-item"><input type="checkbox" id="refrigerator"> Refrigerator</div>
                <div class="amenity-item"><input type="checkbox" id="dryer"> Dryer</div>
                <div class="amenity-item"><input type="checkbox" id="wifi"> Wifi</div>
                <div class="amenity-item"><input type="checkbox" id="tv"> TV Cable</div>
                <div class="amenity-item"><input type="checkbox" id="bbq"> Barbeque</div>
                <div class="amenity-item"><input type="checkbox" id="laundry"> Laundry</div>
                <div class="amenity-item"><input type="checkbox" id="accessible"> Disable Access</div>
                <div class="amenity-item"><input type="checkbox" id="lawn"> Lawn</div>
                <div class="amenity-item"><input type="checkbox" id="elevator"> Elevator</div>
            </div>
        </div>

        <div class="propFormContainer">
            <h2 class="view-hd">Address & Location</h2>
            <div class="propFormGroup">
                <label for="property-title" class="propLabel requiredMark">Address</label>
                <input type="text" id="property-title" name="property-title" value="" class="propInput"
                    placeholder="19 yawkey Way">
            </div>
            <div class="prop-wrapper">
                <div class="propFormGroup">
                    <label for="category" class="propLabel requiredMark">Country</label>
                    <select id="category" name="category" class="propSelect">
                        <option value="USA">USA</option>
                    </select>
                </div>
                <div class="propFormGroup">
                    <label for="listed-in" class="propLabel requiredMark">State</label>
                    <select id="listed-in" name="listed-in" class="propSelect">
                        <option value="Maine">Maine</option>
                    </select>
                </div>
                <div class="propFormGroup">
                    <label for="listed-in" class="propLabel requiredMark">City</label>
                    <select id="listed-in" name="listed-in" class="propSelect">
                        <option value="Boston">Boston</option>
                    </select>
                </div>
                <div class="propFormGroup">
                    <label for="listed-in" class="propLabel requiredMark">Zip Code</label>
                    <input type="number" id="property-title" name="property-title" value="" class="propInput"
                        placeholder="7078">
                </div>
            </div>

            <div class="propFormGroup">
                <label for="price" class="propLabel requiredMark">Map Location</label>
                <input type="text" id="price" name="price" value="" class="propInput" placeholder="XC23+6XC, Moiran, N105">
            </div>
            <div class="propFormGroup">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14474.552842670242!2d67.0583741!3d24.91031945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1754333400866!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <button type="button" class="add-btn" onclick="window.location.href='payment-methods.php'">
                Submit Now
            </button>
        </div>

    </section>
@endsection

@push('scripts')
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

            fileInput.value = ""; // Clear input
        });
    </script>
    <script>
        document.querySelectorAll('.standard-mini-wrapper').forEach(wrapper => {
            wrapper.addEventListener('click', () => {
                const radio = wrapper.querySelector('input[type="radio"]');
                if (radio) radio.checked = true;
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
@endpush
