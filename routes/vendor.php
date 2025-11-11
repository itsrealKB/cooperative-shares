<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\VendorAuthController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Vendor\DashboardController;
use App\Http\Controllers\Vendor\ListingController;
use App\Http\Controllers\Vendor\LocationController;
use Illuminate\Support\Facades\Route;




Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
});

Route::get('/payment-methods', function () {
    return view('screens.vendor.payment-methods');
})->name('payment.methods');


Route::controller(VendorAuthController::class)->group(function () {
    Route::get('/profile', 'profileView')->name('profile');
    Route::post('/profile', 'profileStore')->name('profile.store');
    Route::post('/profile-image', 'profileImageStore')->name('profileImage.store');
    Route::delete('/profile-image', 'profileImageDestory')->name('profileImage.destory');
    Route::post('/password-update', 'passwordUpdate')->name('password.update');
});

Route::controller(LocationController::class)->group(function () {
    Route::get('/countries', 'countries')->name('get.countries');
    Route::get('/states', 'states')->name('get.states');
    Route::get('/cities/{state}', 'cities')->name('get.cities');
});

Route::controller(ListingController::class)->group(function () {
    Route::get('/listings', 'index')->name('listings');
    Route::get('/listings/create', 'create')->name('listing.create');
    Route::post('/listings', 'store')->name('listing.store');
    Route::get('/listings/{listing}/edit', 'edit')->name('listing.edit');
    Route::put('/listings/{listing}', 'update')->name('listing.update');
    Route::delete('/listings/{listing}', 'destory')->name('listing.delete');
    Route::delete('/listings/image/{listing}', 'deleteMainImage')->name('listing.main.image.delete');
    Route::delete('listings/files/{listing}', 'deleteFile')->name('listing.file.delete');
});

Route::controller(LeadController::class)->group(function(){
    Route::get('/leads', 'index')->name('leads');
    Route::get('/leads/{lead}/edit', 'edit')->name('lead.edit');
    Route::put('/leads/{lead}', 'update')->name('lead.update');
    Route::delete('/leads/{lead}', 'destroy')->name('lead.delete');
});


Route::controller(AppointmentController::class)->group(function(){
    Route::get('/appointments', 'index')->name('appointments');
    Route::delete('/appointments/{appointment}', 'destroy')->name('appointment.delete');
});

Route::get('/marketing-plans', function () {
    return view('screens.vendor.marketing-plans');
})->name('marketing.plans');

Route::get('/calender', function () {
    return view('screens.vendor.calender');
})->name('calender');

Route::get('/subscription-plans', function () {
    return view('screens.vendor.subscription-plans');
})->name('subscription.plans');

Route::get('/analytics', function () {
    return view('screens.vendor.analytics');
})->name('analytics');

Route::get('/invoices', function () {
    return view('screens.vendor.invoices');
})->name('invoices');

Route::get('/co-op', function () {
    return view('screens.vendor.co-op');
})->name('co.op');
