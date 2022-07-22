<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EvaluationResource;
use App\Models\evaluasi_jawaban;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EvaluasiJawabanController extends Controller
{
    //

    public function InsertEvaluasiJawaban(Request $request){
        $data = $request->all();

        evaluasi_jawaban::create($data);

        return ['status' => Response::HTTP_OK];
    }

    public function ResultEvaluasiJawaban(Request $request){
        $Evaluasi_Jawaban = evaluasi_jawaban::where('id_progress', $request->id_progress)->first();

        $nilai = 0;

        if(strtoupper($Evaluasi_Jawaban->jawaban1) == "STS"){
            $nilai += 1;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban1) == "TS"){
            $nilai += 2;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban1) == "R"){
            $nilai += 3;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban1) == "S"){
            $nilai += 4;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban1) == "SS"){
            $nilai += 5;
        }

        if(strtoupper($Evaluasi_Jawaban->jawaban2) == "STS"){
            $nilai += 1;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban2) == "TS"){
            $nilai += 2;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban2) == "R"){
            $nilai += 3;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban2) == "S"){
            $nilai += 4;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban2) == "SS"){
            $nilai += 5;
        }

        if(strtoupper($Evaluasi_Jawaban->jawaban3) == "STS"){
            $nilai += 1;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban3) == "TS"){
            $nilai += 2;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban3) == "R"){
            $nilai += 3;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban3) == "S"){
            $nilai += 4;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban3) == "SS"){
            $nilai += 5;
        }

        if(strtoupper($Evaluasi_Jawaban->jawaban4) == "STS"){
            $nilai += 1;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban4) == "TS"){
            $nilai += 2;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban4) == "R"){
            $nilai += 3;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban4) == "S"){
            $nilai += 4;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban4) == "SS"){
            $nilai += 5;
        }

        if(strtoupper($Evaluasi_Jawaban->jawaban5) == "STS"){
            $nilai += 1;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban5) == "TS"){
            $nilai += 2;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban5) == "R"){
            $nilai += 3;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban5) == "S"){
            $nilai += 4;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban5) == "SS"){
            $nilai += 5;
        }

        if(strtoupper($Evaluasi_Jawaban->jawaban6) == "STS"){
            $nilai += 1;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban6) == "TS"){
            $nilai += 2;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban6) == "R"){
            $nilai += 3;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban6) == "S"){
            $nilai += 4;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban6) == "SS"){
            $nilai += 5;
        }

        if(strtoupper($Evaluasi_Jawaban->jawaban7) == "STS"){
            $nilai += 1;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban7) == "TS"){
            $nilai += 2;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban7) == "R"){
            $nilai += 3;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban7) == "S"){
            $nilai += 4;
        }else if(strtoupper($Evaluasi_Jawaban->jawaban7) == "SS"){
            $nilai += 5;
        }

        return [
            'status'=> Response::HTTP_OK,
            'jawaban' => new EvaluationResource($Evaluasi_Jawaban),
            'result' => $nilai
        ];
    }
}
