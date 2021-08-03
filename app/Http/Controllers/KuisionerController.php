<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index =  Kuisioner::all();
        return view('kuisioner.index', ['index' => $index]);
    }


    public function create()
    {
        return view('kuisioner.tambah');
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
        $store = new Kuisioner;

        // deklarasikan model nya
        $store->kuisioner = $request->kuisioner;
        $store->tahun_kuisioner = $request->tahun_kuisioner;

        // simpan datanya
        $store->save();
        $request->session()->flash('store', 'Data berhasil ditambahkan!');
        return redirect()->route('kuisioner');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kuisioner)
    {
        // Kuisioner::find($id_kuisioner)

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kuisioner)
    {
        $edit = Kuisioner::find($id_kuisioner);
        return view('kuisioner.edit', ['edit' => $edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kuisioner)
    {
        $update = Kuisioner::find($request->id_kuisioner);
        $update->kuisioner = $request->kuisioner;
        $update->tahun_kuisioner = $request->tahun_kuisioner;
        

        $update->save();

        $request->session()->flash('update', 'Selamat Data Sudah berhasil Diupdate');
        return redirect()->route('kuisioner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kuisioner)
    {
        $delete = Kuisioner::find($id_kuisioner);
        $delete->delete();

        session()->flash('delete', 'Data berhasil dihapus!');
        return redirect()->route('kuisioner');
    }
}