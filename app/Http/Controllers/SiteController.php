<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {   
        $name = "Augustão";
        $habits = ["Ler", "Correr", "Estudar"];

        return view( 
            view: 'home', 
            data: [
            'name' => $name,
            'habits' => $habits
            ]
        );
    }
}
