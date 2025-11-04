<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function (){
   return view('screens.user.index');
})->name('dashboard');

Route::get('/profile', function (){
   return view('screens.user.profile');
})->name('profile');


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
