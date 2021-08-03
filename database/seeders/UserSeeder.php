<?php

namespace Database\Seeders;

use App\Models\Identitas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->nama = 'Admin';
        $user->username = 'admin';
        $user->email = 'admin@example.com';
        $user->password = Hash::make('admin');
        $user->status = 'admin';
        $user->photo = 'user.png';
        $user->save();

        $identitas = new Identitas;
        $identitas->username = 'admin';
        $identitas->jenis_kelamin = 'Laki-Laki';
        $identitas->jabatan_pegawai = 'Staf';
        $identitas->unit_kerja = 'PUSDATIN';
        $identitas->save();
    }
}