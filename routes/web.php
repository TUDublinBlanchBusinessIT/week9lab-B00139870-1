<?php

// Define web routes for your application
Route::group(['middleware' => 'web'], function () {
    // Load routes for 'web' middleware group
    // Create something great!
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('auth')->name('dashboard');

    // Load routes for 'auth' middleware group
    require __DIR__.'/auth.php';

    // Define resource routes for members
    Route::resource('members', 'App\Http\Controllers\MemberController');

    // Define routes for customers
    Route::get('/customers', 'App\Http\Controllers\CustomerController@index');
    Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');

    // Define routes for courts
    Route::resource('courts', 'App\Http\Controllers\CourtController');

    // Define resource routes for bookings
    Route::resource('bookings', 'App\Http\Controllers\BookingController');

    // Define route for displaying calendar
    Route::get('calendar/display', 'App\Http\Controllers\CalendarController@display');
});
