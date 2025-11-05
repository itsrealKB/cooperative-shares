@extends('layouts.user.app')

@push('styles')
    <style>
        label.error {
            display: block;
            width: 100%;
            text-align: center;
            color: crimson;
        }
    </style>
@endpush

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
                    <form id="profile-form">
                        @csrf
                        <div class="form-group mb-3">
                            <label>First Name<span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}"
                                placeholder="First Name" />
                        </div>
                        <label id="first_name-error" class="error" style="display:none"></label>
                        <div class="form-group mb-3">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}"
                                placeholder="Last Name" />
                        </div>
                        <label id="last_name-error" class="error" style="display:none"></label>
                        <div class="form-group mb-3">
                            <label>Email address<span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                placeholder="Email Address" />
                        </div>
                        <label id="email-error" class="error" style="display:none"></label>
                        <div class="form-group mb-3">
                            <label>Phone Number<span class="text-danger">*</span></label>
                            <div>:</div>
                            <input type="number" class="form-control" name="phone_number" value="{{ $user->phone_number }}"
                                placeholder="Phone Number" />
                        </div>
                        <label id="phone_number-error" class="error" style="display:none"></label>
                        <div class="form-group mb-3">
                            <label>Address</label>
                            <div>:</div>
                            <input type="text" class="form-control" name="address" value="{{ $user->address }}"
                                placeholder="Address" />
                        </div>
                        <label id="address-error" class="error" style="display:none"></label>
                        <div class="form-group form-textarea-group mb-3">
                            <label>Description</label>
                            <div>:</div>
                            <textarea class="form-control" name="description"
                                placeholder="Description">{{ $user->description }}</textarea>
                        </div>
                        <label id="description-error" class="error" style="display:none"></label>
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
        const dummyImage = "{{ asset('assets/user/images/no-image.png') }}"; // 🔁 dummy image path
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
    {{-- Profile Form Validation --}}
    <script>
        $("#profile-form").validate({
            rules: {

                first_name: {
                    required: true,
                },

                last_name: {
                    required: true,
                },

                email: {
                    required: true,
                    email: true
                },

                phone_number: {
                    required: true,
                    number: true,
                },

                address: {
                    required: true,
                },

                description: {
                    required: true,
                },
            },

            messages: {

                first_name: {
                    required: "Please Enter Your First Name!",
                },

                last_name: {
                    required: "Please Enter Your Last Name!",
                },

                email: {
                    required: "Please Enter Your Email!",
                    email: "Please Enter A Valid Email!"
                },

                phone_number: {
                    required: "Please Enter Your Phone Number!",
                    number: "Your Phone Number Should Be Numerical",
                },

                address: {
                    required: "Please Enter Your Address!",

                },

                description: {
                    required: "Please Enter Your Description!",
                },
            },

            errorPlacement : function(error, element)
            {
                error.insertAfter($(element).closest('.form-group'));
            }
        });
    </script>
    {{-- Profile Form Validation --}}

    {{-- Profile Form Submittion --}}
    <script>
        $(document).ready(function () {
            $('#profile-form').on('submit', function (e) {
                if (!$(this).valid()) {
                    return false;
                }
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('user.profile.store') }}",
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
                            })
                        }
                    },
                    error: function (error) {
                        $.LoadingOverlay('hide');
                        if(error.status == 422){
                            let errors = error.responseJSON.errors;
                            let labelErrors = $('label.error');
                            labelErrors.each((index, labelElement) => {
                                let label = $(labelElement);
                                let name = label.attr('id').split('-')[0];
                                if(errors[name]){
                                    $(`#${name}-error`).html(errors[name]).css('display','block');
                                }
                                else{
                                    $(`#${name}-error`).html('').css('display','none');
                                }
                            })
                        }
                        else{
                            Swal.fire({
                                title: 'Something Went Wrong!',
                                text: error.statusText,
                                icon: 'error',
                                confirmButtonColor: '#295568',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                })
            });
        });
    </script>
    {{-- Profile Form Submittion --}}
@endpush
