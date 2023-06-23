<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;

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

        $user = new User();
        $user->id = '08123';
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = FacadesHash::make('admin123');
        $user->usia = 20;
        $user->jenis_kelamin = 'Laki-laki';
        $user->jumlah_anak = 0;
        $user->asal_sekolah = 'SMA Negeri 2';
        $user->lama_mengajar = 2;
        $user->jenjang_mengajar = 'SMA';
        $user->pendidikan = 'S1';
        $user->isIlmuPendidikan = 1;
        $user->isAdmin = 1;
        $user->created_at = \Carbon\Carbon::now();
        $user->updated_at = \Carbon\Carbon::now();
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

        $user = new User();
        $user->id = '08124';
        $user->name = 'User';
        $user->email = 'user1@gmail.com';
        $user->password = Hash::make('user123');
        $user->usia = 25;
        $user->jenis_kelamin = 'Laki-laki';
        $user->jumlah_anak = 0;
        $user->asal_sekolah = 'SMA Negeri 11';
        $user->lama_mengajar = 4;
        $user->jenjang_mengajar = 'SMA';
        $user->pendidikan = 'S2';
        $user->isIlmuPendidikan = 1;
        $user->isAdmin = 1;
        $user->created_at = \Carbon\Carbon::now();
        $user->updated_at = \Carbon\Carbon::now();
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

        $user = new User();
        $user->id = '08125';
        $user->name = 'User2';
        $user->email = 'user2@gmail.com';
        $user->password = Hash::make('user123');
        $user->usia = 24;
        $user->jenis_kelamin = 'Perempuan';
        $user->jumlah_anak = 0;
        $user->asal_sekolah = 'SMA Negeri 1';
        $user->lama_mengajar = 3;
        $user->jenjang_mengajar = 'SMA';
        $user->pendidikan = 'S1';
        $user->isIlmuPendidikan = 1;
        $user->isAdmin = 1;
        $user->created_at = \Carbon\Carbon::now();
        $user->updated_at = \Carbon\Carbon::now();
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

        $user = new User();
        $user->id = '08126';
        $user->name = 'User3';
        $user->email = 'user3@gmail.com';
        $user->password = Hash::make('user123');
        $user->usia = 22;
        $user->jenis_kelamin = 'Laki-laki';
        $user->jumlah_anak = 0;
        $user->asal_sekolah = 'SMA Negeri 3';
        $user->lama_mengajar = 3;
        $user->jenjang_mengajar = 'SMA';
        $user->pendidikan = 'S1';
        $user->isIlmuPendidikan = 1;
        $user->isAdmin = 0;
        $user->created_at = \Carbon\Carbon::now();
        $user->updated_at = \Carbon\Carbon::now();
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->save();

    }
}
