<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = User::where('id', Auth::user()->id)->first();
        return view('profile.index', ['index' => $index]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('profile.edit', ['edit' => $edit]);
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
        if ($request->photo != NULL) {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            // settingan gambar atau photo
            $photo = $request->file('photo');
            $photo_name = time() . '.' . $photo->extension();
            $photo->move(public_path('gambar'), $photo_name);

            // table user
            $update->nama = $request->nama;
            $update->photo = $photo_name;
            $update->save();

            // table identitas
            $update->identitas->nomor_hp = $request->nomor_hp;
            $update->identitas->alamat = $request->alamat;
            $update->identitas->save();
        } else {
            // table user
            $update->nama = $request->nama;
            $update->save();

            // table identitas
            $update->identitas->nomor_hp = $request->nomor_hp;
            $update->identitas->alamat = $request->alamat;
            $update->identitas->save();
        }

        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}