<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    //
    public function getSoal(Request $request){
        $data = $request->json()->all();
    }
}
