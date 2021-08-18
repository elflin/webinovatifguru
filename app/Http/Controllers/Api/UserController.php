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

        

    }
}
