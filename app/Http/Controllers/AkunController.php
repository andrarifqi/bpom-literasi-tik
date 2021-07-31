<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Identitas;
use App\Models\Responden;
use App\Models\ResponKepuasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Charts\ResponKuesionerLiterasi;

class AkunController extends Controller
{
    public function index()
    {
        $index = User::all();
        return view('kelola_akun.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelola_akun.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new User;

        $store->nama = $request->nama;
        $store->username = $request->username;
        $store->password = Hash::make($request->password);
        $store->status = 'responden';
        $store->save();

        $identitas = new Identitas;
        $identitas->username = $request->username;
        $identitas->nomor_hp = $request->nomor_hp;
        $identitas->alamat = $request->alamat;
        $identitas->save();

        $request->session()->flash('store', 'Data Berhasil Ditambahkan');
        return redirect()->route('kelola_akun');
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
    public function edit($id)
    {
        $edit = User::find($id);
        return view('kelola_akun.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = User::find($request->id);
        $update->nama = $request->nama;
        $update->save();

        $update->identitas->alamat = $request->alamat;
        $update->identitas->nomor_hp = $request->nomor_hp;
        $update->identitas->save();



        $request->session()->flash('update', 'Data Berhasil Diperbaharui');
        return redirect()->route('kelola_akun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();

        session()->flash('delete', 'Data Berhasil Dihapus');
        return redirect()->route('kelola_akun');
    }
}