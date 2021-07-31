<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('users.login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $proses = $request->only('username', 'password');

        if (Auth::attempt($proses)) {
            $user = Auth::user();

            if ($user->status == 'admin') {
                return redirect()->intended('dashboard_literasi');
            } elseif ($user->status == 'responden') {
                return redirect()->intended('dashboard_literasi');
            } else {
                return redirect()->route('login');
                // return redirect()->back();
            }
        } else {
            return redirect()->route('login');
            // return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}