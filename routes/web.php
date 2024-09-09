<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

Route::get("/activities", [ActivityController::class, "index"]);

Route::get('/', function () {
    return view('welcome');
});
