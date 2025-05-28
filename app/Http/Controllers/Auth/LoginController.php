<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Cari pengguna berdasarkan email
        $user = \App\Models\User::where('email', $request->email)->first();
    
        if(!$user){
            return back()->withErrors([
                'error_message' => 'No user found!'
            ]);
        }
        // Perbandingan langsung tanpa hash (TIDAK AMAN)
        else if ($user && $request->password === $user->password) {
            Auth::login($user);
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors([
                'error_message' => 'Wrong password'
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
    
}
