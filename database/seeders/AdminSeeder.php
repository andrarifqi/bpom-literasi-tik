<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'status' => 'admin',
            'photo' => 'admin.jpg',
        ]);

        DB::table('identitas')->insert([
            'username' => 'admin',
            'alamat' => 'Padang',
            'nomor_hp' => '0812345678',
        ]);
    }
}
