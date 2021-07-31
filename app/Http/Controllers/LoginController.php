<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function admin()
    {
        return view('dashboard.dashboardLiterasi');
    }

    public function responden()
    {
        return view('dashboard.dashboardLiterasi');
    }
}