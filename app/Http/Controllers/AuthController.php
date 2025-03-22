<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Metode untuk menampilkan form login
    public function showLoginForm()
    {
        return view('login'); // ganti dengan path sesuai file login.blade.php
    }

    // Metode untuk menangani form login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek autentikasi
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Cek peran user
            if (Auth::user()->role == 'dokter') {
                return redirect()->route('dokter.dashboard'); // ganti dengan route dashboard dokter
            } elseif (Auth::user()->role == 'apoteker') {
                return redirect()->route('apoteker.dashboard'); // ganti dengan route dashboard apoteker
            }
        }

        // Jika login gagal
        return redirect()->back()->withErrors(['username' => 'The provided credentials are incorrect.']);
    }
}
