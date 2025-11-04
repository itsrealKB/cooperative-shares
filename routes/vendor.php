<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function (){
   return view('screens.vendor.index');
})->name('dashboard');

Route::get('/profile', function (){
//    return view('screens.vendor.profile');
})->name('profile');


Route::get('/save-listing', function (){
//    return view('screens.vendor.save-listing');
})->name('save.listing');

Route::get('/appointments', function (){
//    return view('screens.vendor.appointments');
})->name('appointments');

Route::get('/property-map', function (){
//    return view('screens.vendor.property-map');
})->name('property.map');

Route::get('/co-op', function (){
//    return view('screens.vendor.co-op');
})->name('co.op');
