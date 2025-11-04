@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="Contact Us" :route="route('index')" />
    <section class="contact-sec1">
        <div class="container">
            <div class="contact-card-wrapper">
                <div class="conact-card-prnt">
                    <div class="con-card1">
                        <div class="contact-crd-img">
                            <img src="{{ asset('assets/web/images/con-icon1.png') }}" alt="" class="contact-icon">
                        </div>
                        <div class="contact-crd-content">
                            <h6 class="contact-chld-hd">Phone Number</h6>
                            <p class="contact-chld-para">(816) 529-7022</p>
                        </div>
                    </div>
                </div>
                <div class="conact-card-prnt">
                    <div class="con-card1">
                        <div class="contact-crd-img">
                            <img src="{{ asset('assets/web/images/con-icon2.png') }}" alt="" class="contact-icon">
                        </div>
                        <div class="contact-crd-content">
                            <h6 class="contact-chld-hd">Email Address</h6>
                            <p class="contact-chld-para">info@cooperativeshares.com</p>
                        </div>
                    </div>
                </div>
                <div class="conact-card-prnt">
                    <div class="con-card1">
                        <div class="contact-crd-img">
                            <img src="{{ asset('assets/web/images/con-icon4.png') }}" alt="" class="contact-icon">
                        </div>
                        <div class="contact-crd-content">
                            <h6 class="contact-chld-hd">Address</h6>
                            <p class="contact-chld-para">520 E 4th st Tonganoxie, KS 66086</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form-section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="sec-hd">Reach Out Anytime</h2>
                    <p class="diff-para1">Have questions or need guidance? Our team is here to help you explore co-op homes
                        for sale and understand senior cooperative housing.</p>
                    <p class="diff-para1">Reach out via the form below, email, or phone, and we’ll connect you with the
                        right
                        resources to address your questions, listings, or community needs.</p>
                    <form action="" class="contact-form102">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field-wrapper">
                                    <label>Full Name:</label>
                                    <input type="text" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field-wrapper">
                                    <label>Your Email:</label>
                                    <input type="email" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field-wrapper">
                                    <label>Phone Number:</label>
                                    <input type="number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field-wrapper">
                                    <label>Select Service</label>
                                    <select aria-placeholder="Select Service">
                                        <option>Select Service</option>
                                        <option>Service 2</option>
                                        <option>Service 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-field-wrapper">
                                    <label>Write Message:</label>
                                    <textarea name="" id="" placeholder="Message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-field-wrapper contact-field-wrapper2">
                                    <button class="primary-btn" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="contact-img">
                        <img src="{{ asset('assets/web/images/contact-img.png') }}" alt="" class="img-fluid contact-main-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-sec">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52784203.16337093!2d-161.37967564687162!3d36.14970978124419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1750293825685!5m2!1sen!2s"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            class="map"></iframe>
    </section>
@endsection
