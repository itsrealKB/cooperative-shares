<?php

use App\Http\Controllers\Auth\VendorAuthController;
use App\Http\Controllers\Vendor\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function (){
   return view('screens.vendor.index');
})->name('dashboard');

Route::get('/payment-methods', function (){
   return view('screens.vendor.payment-methods');
})->name('payment.methods');


Route::controller(VendorAuthController::class)->group(function(){
    Route::get('/profile', 'profileView')->name('profile');
    Route::post('/profile', 'profileStore')->name('profile.store');
    Route::post('/profile-image', 'profileImageStore')->name('profileImage.store');
    Route::delete('/profile-image', 'profileImageDestory')->name('profileImage.destory');
    Route::post('/password-update', 'passwordUpdate')->name('password.update');
});


Route::controller(ListingController::class)->group(function(){
    Route::get('/listings', 'index')->name('listings');
    Route::get('/listing/create', 'create')->name('listing.create');
    Route::post('/listing', 'store')->name('listing.store');
    Route::get('/listing/{listing}/edit', 'edit')->name('listing.edit');
    Route::put('/listing/{listing}', 'update')->name('listing.update');
    Route::delete('/listing/{listing}', 'destory')->name('listing.delete');
});

Route::get('/leads', function (){
   return view('screens.vendor.leads');
})->name('leads');

Route::get('/appointments', function (){
   return view('screens.vendor.appointments');
})->name('appointments');

Route::get('/marketing-plans', function (){
   return view('screens.vendor.marketing-plans');
})->name('marketing.plans');

Route::get('/calender', function (){
   return view('screens.vendor.calender');
})->name('calender');

Route::get('/subscription-plans', function (){
   return view('screens.vendor.subscription-plans');
})->name('subscription.plans');

Route::get('/analytics', function (){
   return view('screens.vendor.analytics');
})->name('analytics');

Route::get('/invoices', function (){
   return view('screens.vendor.invoices');
})->name('invoices');


Route::get('/co-op', function (){
   return view('screens.vendor.co-op');
})->name('co.op');
