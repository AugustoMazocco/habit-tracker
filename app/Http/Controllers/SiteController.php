<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {   
        $name = "Augustão";
        $habits = ["Ler", "Correr", "Estudar"];

        return view( 'home', compact('name', 'habits'));
    }

    public function dashboard()
    {   
        $name = "Augustão";
        $habits = ["Ler", "Correr", "Estudar"];

        return view( view: 'dashboard' );
    }
}
