<?php

use App\Http\Controllers\Auth\UserAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function (){
   return view('screens.user.index');
})->name('dashboard');

Route::controller(UserAuthController::class)->group(function(){
    Route::get('/profile', 'profileView')->name('profile');
    Route::post('/profile', 'profileStore')->name('profile.store');
    Route::post('/profile-image', 'profileImageStore')->name('profileImage.store');
    Route::delete('/profile-image', 'profileImageDestory')->name('profileImage.destory');
    Route::post('/password-update', 'passwordUpdate')->name('password.update');
});

Route::get('/save-listing', function (){
   return view('screens.user.save-listing');
})->name('save.listing');

Route::get('/appointments', function (){
   return view('screens.user.appointments');
})->name('appointments');

Route::get('/property-map', function (){
   return view('screens.user.property-map');
})->name('property.map');

Route::get('/co-op', function (){
   return view('screens.user.co-op');
})->name('co.op');
