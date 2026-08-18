<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterControler extends Controller
{
    public function index()
    {
        return view( view:'register' );
    }

    public function store(RegisterRequest $request)
    {
        $user = User::query()->create([
            'name' => $request->input( key: 'name'),
            'email' => $request->input( key: 'email'),
            'password' => $request->input( key: 'password')
        ]);

        Auth::login($user);

        return redirect()->route( route:'site.dashboard');
    }
}
