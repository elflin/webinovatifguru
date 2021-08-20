<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\history;
use App\Models\Soal;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    //
    public function getJawabanByHistory(Request $request){

    }

    public function insertJawabanByHistory(Request $request){
        $history = history::where('id', $request->historyId)->first();
        $soal = Soal::where('id', $request->soalId)->first();

        $history->soal()->attach($soal, ['nilai'=>$request->nilai]);

        return ['status'=>'Suksess'];
    }

    public function calculateJawabanByVariabel(Request $request){

    }
}
