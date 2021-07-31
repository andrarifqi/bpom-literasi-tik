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
        $user->password = Hash::make('admin');
        $user->status = 'admin';
        $user->photo = 'admin.jpg';
        $user->save();

        $identitas = new Identitas;
        $identitas->username = 'admin';
        $identitas->alamat = 'Padang';
        $identitas->nomor_hp = '0812344454';
        $identitas->save();
    }
}
