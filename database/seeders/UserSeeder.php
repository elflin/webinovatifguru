<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kurang mata pelajaran sama status pernikahan + remember token
        DB::table('users')->insert([
            'id' => '08123',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'usia' => 20,
            'jenis_kelamin' => 'Laki-laki',
            'jumlah_anak' => 0,
            'asal_sekolah' => 'SMA Negeri 2',
            'lama_mengajar' => 2,
            'jenjang_mengajar' => 'SMA',
            'pendidikan' => 'S1',
            'isIlmuPendidikan' => 1,
            'isAdmin' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
