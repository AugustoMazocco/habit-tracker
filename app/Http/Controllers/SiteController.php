<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View as View;

class SiteController extends Controller
{
    public function index(): View
    {   
        return view( view: 'home');
    }

    
}
