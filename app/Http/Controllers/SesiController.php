<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'isi email terlebih dahulu',
            'password.required' => 'isi password terlebih dahulu',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } else if (Auth::user()->role == 'karyawan') {
                return redirect('/home');
            }
        } else {
            return redirect('')->withErrors('email atau password tidak sesuai');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
