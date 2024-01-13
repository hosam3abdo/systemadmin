<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
{
    return view('login');
}

public function login(Request $request)
    {
     
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        return redirect()->intended('/products');
        
        
    }
}



