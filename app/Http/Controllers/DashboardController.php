<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Identitas;
use App\Models\Kuisioner;
use App\Models\Responden;
use Illuminate\Http\Request;
use App\Models\ResponKepuasan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard_literasi() {


        $responLiterasi = DB::table('responden')
                         ->select('kuisioner', 'tahun_kuisioner')
                         ->selectRaw("SUM(CASE WHEN response = 'sangat tidak setuju' THEN 1 ELSE 0 END) AS sum_sts, ".
                                     "SUM(CASE WHEN response = 'tidak setuju' THEN 1 ELSE 0 END) AS sum_ts, ".
                                     "SUM(CASE WHEN response = 'tidak tahu' THEN 1 ELSE 0 END) AS sum_th, ".
                                     "SUM(CASE WHEN response = 'setuju' THEN 1 ELSE 0 END) AS sum_s, ".
                                     "SUM(CASE WHEN response = 'sangat setuju' THEN 1 ELSE 0 END) AS sum_ss")
                         ->groupBy('kuisioner')
                         ->get();

        return view('dashboard.dashboardLiterasi', ['respon_literasi'=>$responLiterasi]);
    }

    public function dashboard_kepuasan() {
        $responKepuasan = DB::table('respon_kepuasan')
                         ->select('kuisioner_kepuasan', 'tahun_kuisioner')
                         ->selectRaw("SUM(CASE WHEN respon_kepuasan = 'sangat tidak setuju' THEN 1 ELSE 0 END) AS sum_sts, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'tidak setuju' THEN 1 ELSE 0 END) AS sum_ts, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'tidak tahu' THEN 1 ELSE 0 END) AS sum_th, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'setuju' THEN 1 ELSE 0 END) AS sum_s, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'sangat setuju' THEN 1 ELSE 0 END) AS sum_ss")
                         ->groupBy('kuisioner_kepuasan')
                         ->get();

        return view('dashboard.dashboardKepuasan', ['respon_kepuasan'=>$responKepuasan]);
    }
}