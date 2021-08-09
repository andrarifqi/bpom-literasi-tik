<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResponKepuasan;
use App\Models\KuisionerKepuasan;
use Illuminate\Support\Facades\Auth;

class ResponKepuasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = ResponKepuasan::all()->where('id_user', Auth::user()->id);
        $kuisioner_kepuasan = KuisionerKepuasan::all();

        return view('kuisioner_kepuasan.index_respon_kepuasan', ['index' => $index]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respon_kepuasan = KuisionerKepuasan::all()->where('tahun_kuisioner', '2020');
        return view('kuisioner_kepuasan.kuisioner_respon_kepuasan', ['respon_kepuasan' => $respon_kepuasan]);
    }

    public function create2021()
    {
        $respon_kepuasan = KuisionerKepuasan::all()->where('tahun_kuisioner', '2021');
        return view('kuisioner_kepuasan.kuisioner_respon_kepuasan', ['respon_kepuasan' => $respon_kepuasan]);
    }

    public function respon_kepuasan(Request $request)
    {
        $jum_respon_kepuasan = $request->respon_kepuasan;
        $kuisioner_kepuasan = $request->kuisioner_kepuasan;
        $tahun_kuisioner = $request->tahun_kuisioner;
        for ($i = 0; $i < count($jum_respon_kepuasan); $i++) {
            $respon_kepuasan = new ResponKepuasan;
            $respon_kepuasan->id_user = Auth::User()->id;
            $respon_kepuasan->kuisioner_kepuasan = $kuisioner_kepuasan[$i];
            $respon_kepuasan->tahun_kuisioner = $tahun_kuisioner;
            $respon_kepuasan->respon_kepuasan = $jum_respon_kepuasan[$i];
            $respon_kepuasan->save();
        }

        $request->session()->flash('store', 'Selamat Data Sudah berhasil Ditambahkan');
        return redirect()->route('index_respon_kepuasan');
    }
}