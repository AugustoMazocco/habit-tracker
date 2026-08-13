<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get( uri:"/", action: [SiteController::class, 'index']);