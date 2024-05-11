<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function Login()
    {
        return view('website.Login.Login');
    }

    public function Authenticate(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            $Role = Auth::user()->Role;
            if ($Role == 'Pengguna') {
                return redirect()->intended('user');
            } elseif ($Role == 'Bidan') {
                return redirect()->intended('Admin');
            }
        } else {
            return back()->with('gagal', 'Password atau username salah');
        }
    }

    public function Logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
