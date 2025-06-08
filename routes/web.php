<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigateController;

// default route
Route::get('/{any?}', function () {
    return view('dashboard');
});

// navigation route
Route::get('/home/navigate', [NavigateController::class, "home"]);
Route::get('/about/navigate', [NavigateController::class, "about"]);
Route::get('/contact/navigate', [NavigateController::class, "contact"]);
Route::get('/settings/navigate', [NavigateController::class, "settings"]);
