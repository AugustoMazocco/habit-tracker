<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\RegisterControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

//SITE
Route::get( uri:"/", action: [SiteController::class, 'index'])->name( name: 'site.index');
Route::get( uri:"/login", action: [LoginController::class, 'index'])->name( name: 'site.login');
Route::post( uri:"/login", action: [LoginController::class, 'authenticate'])->name( name: 'auth.login');
Route::get( uri:"/cadastro", action: [RegisterControler::class, 'index'])->name( name: 'site.register');
Route::post( uri:"/cadastro", action: [RegisterControler::class, 'store'])->name( name: 'auth.register');

Route::middleware('auth')->group(function () {
    Route::post( uri:"/logout", action: [LoginController::class, 'logout'])->name( name: 'auth.logout');
    Route::resource( name: '/dashboard/habits', controller: HabitController::class)->except(methods: 'show');   
    Route::get( uri:'/dashboard/habits/configurar', action: [HabitController::class, 'settings'])->name( name: 'habits.settings');
    Route::post( uri:'/dashboard/habits/{habit}/toogle', action: [HabitController::class, 'toggle'])->name( name: 'habits.toggle' );
    });

