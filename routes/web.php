<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\VendorAuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
});

Route::controller(UserAuthController::class)->middleware('web')->group(function(){
    Route::post('/register', 'register')->name('user.register');
    Route::post('/login', 'login')->name('user.login');
    Route::get('/logout','destroy')->name('user.logout');
});

Route::controller(VendorAuthController::class)->middleware('web')->group(function(){
    Route::post('/vendor-register', 'register')->name('vendor.register');
    Route::post('/vendor-login', 'login')->name('vendor.login');
    Route::get('/vendor-logout','destroy')->name('vendor.logout');
});

Route::get('/about', function () {
    return view('screens.web.about');
})->name('about');

Route::controller(ListingController::class)->group(function(){
    Route::get('/listings', 'index')->name('listings');
    Route::get('/listing-detail/{listing}','show')->name('listing.detail');
});

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
