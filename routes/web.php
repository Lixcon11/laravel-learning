<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::resource("activities", ActivityController::class);

Route::resource('contacts', ContactController::class);

Route::resource('users', UserController::class);

Route::resource('rooms', RoomController::class);

Route::resource('bookings', BookingController::class);

Route::get('/', function () {
    return view('welcome');
});
