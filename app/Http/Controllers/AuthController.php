<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(StoreAuthRequest $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password'=> $request->password]))
        {
            $request->session()->regenerate();
            if(auth()->user()->level == 'petugas')
            {
                return redirect()->route('dashboard.petugas');
            } else {
                return redirect()->route('dashboard.admin');   
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.login')->withSuccess('Anda telah keluar dari sistem');
    }
}