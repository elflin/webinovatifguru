<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\test_jawaban;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestJawabanController extends Controller
{
    public function InsertTestJawaban(Request $request){
        $data = $request->all();

        foreach($data['data'] as $single){
            test_jawaban::create($single);
        }

        return ['status'=>Response::HTTP_OK];
    }
}
