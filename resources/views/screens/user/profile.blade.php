@extends('layouts.user.app')

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">Profile</h1>
        <!-- <div class="profile-info-wrapper">
                </div> -->
        <div class="profile-info-wrapper">
            <div class="row">
                <!-- Left Side: Profile Info Form -->
                <div class="col-xxl-9 col-xl-8">
                    <h5 class="Pro-info-hd"><strong>Profile Information</strong></h5>
                    <form>
                        <div class="form-group mb-3">
                            <label>First Name<span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email address<span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone Number<span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group mb-3">
                            <label>Address</label>
                            <div>:</div>
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group form-textarea-group mb-3">
                            <label>Description</label>
                            <div>:</div>
                            <textarea class="form-control" placeholder="Description"></textarea>
                        </div>
                        <button type="submit" class="btn-dark">SAVE</button>
                    </form>
                </div>
                <div class="col-xxl-3 col-xl-4">
                    <div class="profile-card shadow-sm text-center">
                        <!-- Profile Image -->
                        <img id="profileImage" src="{{ asset('assets/user/images/person-img.png') }}" alt="Profile"
                            class="img-fluid rounded mb-2" style="max-height: 180px; object-fit: cover;">

                        <!-- Upload & Delete Buttons -->
                        <h6 class="change-pro-hd">Change Profile Picture</h6>
                        <div class="mb-2">
                            <input type="file" id="imageInput" accept="image/*" style="display: none;">
                            <button class="btn-sm upload-btn-primary"
                                onclick="document.getElementById('imageInput').click()">UPLOAD A FILE</button>
                            <button class="btn-sm btn-danger" onclick="resetToDummy()">DELETE</button>
                        </div>

                        <!-- Password Reset Fields -->
                        <h6 class="mt-3 password-hd">Password Reset</h6>
                        <input type="password" class="form-control password-input" placeholder="New Password*">
                        <input type="password" class="form-control password-input" placeholder="Confirm Password*">
                        <button class="btn btn-dark btn-dark2">UPDATE</button>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection

@push('scripts')
    <script>
        const dummyImage = "assets/images/no-image.png"; // 🔁 dummy image path
        const profileImage = document.getElementById("profileImage");
        const imageInput = document.getElementById("imageInput");

        // Upload Function
        imageInput.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Delete Function
        function resetToDummy() {
            profileImage.src = dummyImage;
            imageInput.value = ""; // clear selected file
        }
    </script>
@endpush
