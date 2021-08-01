<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Identitas;
use App\Models\Responden;
use App\Models\ResponKepuasan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChartController extends Controller
{
    public function chartDashboardLiterasi()
    {
        $responLiterasi = DB::table('responden')
             ->select('response', DB::raw('count(*) as total_respon'))
             ->groupBy('response')
             ->orderByRaw("CASE response
                                WHEN 'Sangat Tidak Setuju' THEN 1
                                WHEN 'Tidak Setuju' THEN 2
                                WHEN 'Tidak Tahu' THEN 3
                                WHEN 'Setuju' THEN 4
                                ELSE 5
                                END")
             ->pluck('total_respon','response');

        $response = $responLiterasi->keys();
        $total_response = $responLiterasi->values();
        return view('dashboard.dashboardKepuasan', ['TotalRespon'=>$total_response, 'Respon'=>$response]);

        // $response = $responLiterasi->keys();
        // $total_response = $responLiterasi->values();
        // return view('dashboard.dashboardLiterasi', ['TotalRespon'=>$total_response, 'Respon'=>$response]);
    }

    public function chartDashboardKepuasan() {

        $responKepuasan = DB::table('respon_kepuasan')
                        ->select('respon_kepuasan', DB::raw('count(*) as total_respon_kepuasan'))
                        ->groupBy('respon_kepuasan')
                        ->orderByRaw("CASE respon_kepuasan
                                        WHEN 'Sangat Tidak Setuju' THEN 1
                                        WHEN 'Tidak Setuju' THEN 2
                                        WHEN 'Tidak Tahu' THEN 3
                                        WHEN 'Setuju' THEN 4
                                        ELSE 5
                                    END")
                        ->pluck('total_respon_kepuasan','respon_kepuasan');

        $response = $responKepuasan->keys();
        $total_response = $responKepuasan->values();
        return view('dashboard.dashboardKepuasan', ['TotalRespon'=>$total_response, 'Respon'=>$response]);
    }

    
}