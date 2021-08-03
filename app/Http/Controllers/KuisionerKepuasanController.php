<?php

namespace App\Http\Controllers;

use App\Models\KuisionerKepuasan;
use Illuminate\Http\Request;

class KuisionerKepuasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index =  KuisionerKepuasan::all();
        return view('kuisioner_kepuasan.index', ['index' => $index]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuisioner_kepuasan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // untuk insert data menggunakan model
        $store = new KuisionerKepuasan;

        // deklarasikan model nya
        $store->kuisioner_kepuasan = $request->kuisioner_kepuasan;
        $store->tahun_kuisioner = $request->tahun_kuisioner;
        
        
        // simpan datanya
        $store->save();
        $request->session()->flash('store', 'Data berhasil ditambahkan!');
        return redirect()->route('kuisioner_kepuasan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kuisioner_kepuasan)
    {
        $edit = KuisionerKepuasan::find($id_kuisioner_kepuasan);
        return view('kuisioner_kepuasan.edit', ['edit' => $edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kuisioner_kepuasan)
    {
        $update = KuisionerKepuasan::find($request->id_kuisioner_kepuasan);
        $update->kuisioner_kepuasan = $request->kuisioner_kepuasan;
        $update->tahun_kuisioner = $request->tahun_kuisioner;
        
        
        $update->save();

        $request->session()->flash('update', 'Selamat Data Sudah berhasil Diupdate');
        return redirect()->route('kuisioner_kepuasan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kuisioner_kepuasan)
    {
        $delete = KuisionerKepuasan::find($id_kuisioner_kepuasan);
        $delete->delete();

        session()->flash('delete', 'Data berhasil dihapus!');
        return redirect()->route('kuisioner_kepuasan');
    }
}