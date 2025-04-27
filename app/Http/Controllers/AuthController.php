<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function login (){
        return view ('auth/login');
    }

    public function loginProses(Request $request){
        $request->validate([
            'email'        => 'required',
            'password'     => 'required|min:8',
        ],[
            'email.required'       => 'Email Tidak Boleh Kosong',
            'password.required'    => 'Password Tidak Boleh Kosong',
            'password.min'         => 'Password Harus Terdiri Dari Minimal 8 Karakter',
        ]);

        $data = array (
            'email'         => $request->email,
            'password'      => $request->password,
        );

        if (auth::attempt($data)) {
            return redirect()->route('dashboard')->with('success','Login Berhasil');
        } else {
            return redirect()->back()->with('error', 'Email Atau Password Salah');
        }
    }

    public function logout(){
        Auth::logout();
        
        return redirect()->route('login')->with('success', 'Anda Sudah Logout');
    }

}
