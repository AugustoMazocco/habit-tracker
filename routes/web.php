<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

//SITE
Route::get( uri:"/", action: [SiteController::class, 'index'])->name( name: 'site.index');

//LOGIN
Route::get( uri:"/login", action: [LoginController::class, 'index'])->name( name: 'site.login');
Route::post( uri:"/login", action: [LoginController::class, 'authenticate'])->name( name: 'auth.login');

Route::middleware('auth')->group(function () {

    Route::get( uri:"/dashboard", action: [SiteController::class, 'dashboard'])->name( name: 'site.dashboard');

    Route::post( uri:"/logout", action: [LoginController::class, 'logout'])->name( name: 'auth.logout');
});

