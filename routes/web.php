<?php

//use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
 
Route::resource('activities', ActivityController::class);

require __DIR__.'/auth.php';
