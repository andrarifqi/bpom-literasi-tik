<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use App\Models\Responden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = responden::all()->where('id_user', Auth::user()->id);
        return view('kuisioner.index_responden', ['index' => $index]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Kuisioner::all()->where('tahun_kuisioner', '2020');
        return view('kuisioner.kuisioner_response', ['response' => $response]);
    }

    public function create2021()
    {
        $response = Kuisioner::all()->where('tahun_kuisioner', '2021');
        return view('kuisioner.kuisioner_response', ['response' => $response]);
    }

    public function response(Request $request)
    {    
        $jum_response = $request->response;
        $kuisioner = $request->kuisioner;
        $tahun_kuisioner = $request->tahun_kuisioner;
        for ($i = 0; $i < count($jum_response); $i++) {
            $response = new responden;
            $response->id_user = Auth::User()->id;
            $response->kuisioner = $kuisioner[$i];
            $response->tahun_kuisioner = $tahun_kuisioner;
            $response->response = $jum_response[$i];
            $response->save();
        }

        $request->session()->flash('store', 'Selamat Data Sudah berhasil Ditambahkan');
        return redirect()->route('index_response');
    }
}