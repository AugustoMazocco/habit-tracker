<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

//SITE
Route::get( uri:"/", action: [SiteController::class, 'index']);

//LOGIN
Route::get( uri:"/login", action: [LoginController::class, 'index']);
Route::post( uri:"/login", action: [LoginController::class, 'authenticate']);
