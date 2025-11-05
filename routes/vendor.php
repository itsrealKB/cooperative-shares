<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function (){
   return view('screens.vendor.index');
})->name('dashboard');

Route::get('/payment-methods', function (){
   return view('screens.vendor.payment-methods');
})->name('payment.methods');

Route::get('/profile', function (){
   return view('screens.vendor.profile');
})->name('profile');


Route::get('/listing', function (){
   return view('screens.vendor.listing');
})->name('listing');

Route::get('/add-listing', function (){
   return view('screens.vendor.add-listing');
})->name('add.listing');

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
