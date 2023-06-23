<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SoalResource;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    //
    public function getAllSoal(){
        $soal = Soal::all();

        return SoalResource::collection($soal);
    }


    public function getSoalBy(Request $request){

        $soal = null;

        if(!empty($request->variabel)){
            $soal = Soal::where('variabel', $request->variabel)
            ->orderBy('id')
            ->get();
        }else if(!empty($request->dimensi)){
            $soal = Soal::where('dimensi', $request->dimensi)
            ->orderBy('id')
            ->get();
        }

        return SoalResource::collection($soal);
    }
}
