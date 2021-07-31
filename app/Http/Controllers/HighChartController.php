<?php

namespace App\Http\Controllers;
use App\Models\Responden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HighChartController extends Controller
{
    public function handleChart ()
    {
        $responLiterasi = DB::table('responden')
             ->select('response', DB::raw('count(*) as total_respon'))
             ->groupBy('response')
             ->pluck('total_respon','response');

        return view('users.dashboard', compact('responLiterasi'));
    }
}