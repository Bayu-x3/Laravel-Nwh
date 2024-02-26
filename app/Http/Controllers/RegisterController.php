<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreRegisterRequest;

class RegisterController extends Controller
{
    //

    public function create(){
        return view('auth.register');
    }

    public function store(StoreRegisterRequest $request, User $user){
        $user = User::create([
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
        ]);
        return redirect()->route('login.login')->with(['success', 'Anda berhasil registrasi']);
    }
}