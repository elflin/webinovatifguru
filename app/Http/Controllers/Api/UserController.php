<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUser(Request $request){

        $user = null;

        if(!empty($request->id)){
            $user = User::where('id', $request->id)->get();
        }else if(!empty($request->email)){
            $user = User::where('email', $request->email)->get();
        }

        return UserResource::collection($user);
    }

    public function createUser(Request $request){

        $user = new User();

        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return ['status'=>"sukses"];
    }

    public function updateUser(Request $request){

        $user = User::where('id', $request->id)->first();
        
        if(!empty($user)){
            if(!empty($request->name)){
                $user->name = $request->name;
            }
            if(!empty($request->email)){
                $user->email = $request->email;
            }
            if(!empty($request->password)){
                $user->password = $request->password;
            }
            if(!empty($request->usia)){
                $user->usia = $request->usia;
            }
            if(!empty($request->jenis_kelamin)){
                $user->jenis_kelamin = $request->jenis_kelamin;
            }
            if(!empty($request->status_pernikahan)){
                $user->status_pernikahan = $request->status_pernikahan;
            }
            if(!empty($request->jumlah_anak)){
                $user->jumlah_anak = $request->jumlah_anak;
            }
            if(!empty($request->asal_sekolah)){
                $user->asal_sekolah = $request->asal_sekolah;
            }
            if(!empty($request->lama_mengajar)){
                $user->lama_mengajar = $request->lama_mengajar;
            }
            if(!empty($request->jenjang_mengajar)){
                $user->jenjang_mengajar = $request->jenjang_mengajar;
            }
            if(!empty($request->mata_pelajaran)){
                $user->mata_pelajaran = $request->mata_pelajaran;
            }
            if(!empty($request->pendidikan)){
                $user->pendidikan = $request->pendidikan;
            }
            if(!empty($request->isIlmuPendidikan)){
                $user->isIlmuPendidikan = $request->isIlmuPendidikan;
            }

            $user->save();

            return ['status'=>"sukses"];
        }else{
            return ['status'=>"gagal"];
        }

    }
}
