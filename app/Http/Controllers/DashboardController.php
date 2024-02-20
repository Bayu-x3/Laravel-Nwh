<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function petugas(){
        if (Auth::check()) {
            return view('dashboard.petugas');
        }
        return redirect()->route('login.login')->withErrors(['notif' => 'Login dulu mas'])->onlyInput('username');
    }

    public function admin(){
        if (Auth::check()) {
            return view('dashboard.admin');
        }
        return redirect()->route('login.login')->withErrors(['notif' => 'Login dulu mas'])->onlyInput('username');
    }
}