<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('screens.web.index');
})->name('index');

Route::get('/about', function () {
    return view('screens.web.about');
})->name('about');

Route::get('/listings', function () {
    return view('screens.web.listings');
})->name('listings');

Route::get('/listing-detail', function () {
    return view('screens.web.listing-detail');
})->name('listing.detail');

Route::get('/services', function () {
    return view('screens.web.services');
})->name('services');

Route::get('/service-details', function () {
    return view('screens.web.service-details');
})->name('services.detail');

Route::get('/reviews', function () {
    return view('screens.web.reviews');
})->name('reviews');

Route::get('/blogs', function () {
    return view('screens.web.blogs');
})->name('blogs');

Route::get('/contact', function () {
    return view('screens.web.contact');
})->name('contact');

Route::get('/cooperrative-differences', function () {
    return view('screens.web.cooperrative-differences');
})->name('cooperrative.differences');

Route::get('/privacy-policy', function () {
    return view('screens.web.privacy-policy');
})->name('privacy.policy');

Route::get('/faq', function () {
    return view('screens.web.faq');
})->name('faq');

Route::get('/terms', function () {
    return view('screens.web.terms');
})->name('terms');

Route::get('/realtor-profile', function () {
    return view('screens.web.realtor-profile');
})->name('realtor.profile');
