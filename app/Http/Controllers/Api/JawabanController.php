<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JawabanResource;
use App\Models\history;
use App\Models\Jawaban;
use App\Models\skala;
use App\Models\Soal;
use App\Models\User;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    //
    
    public function getJawabanByHistory(Request $request){
        $jawaban = Jawaban::where('historyId', $request->historyId)->get();

        return JawabanResource::collection($jawaban);
    }

    public function insertJawabanByHistory(Request $request){
        $data = $request->all();

        foreach($data['data'] as $single){
            // $jawaban = new Jawaban;
            // $jawaban->historyId = $single->historyId;
            // $jawaban->soalId = $single->soalId;
            // $jawaban->nilai = $single->nilai;
            Jawaban::create($single);
            // $jawaban->save();
        }
    
        return ['status'=>'Suksess'];
    }

    public function reportJawaban(Request $request){
        $variabelDict = array(
            'Perilaku Inovatif Guru',
            'Intensi Berinovasi',
            'Sikap Terhadap Inovasi',
            'Norma Subyektif terhadap Kreativitas',
            'Efikasi Berinovasi',
            'Budaya Organisasi Berorientasi Pembelajaran',
            'Self-Determination'
        );

        $dimensiDict = array(
            'Idea Generation',
            'Idea Promotion',
            'Idea Realization',
            'Intensi Berinovasi',
            'Support For Innovation',
            'Risk Of Tolerance',
            'Openness To External Knowledge',
            'Family Expectations For Creativity',
            'Leader Expectations For Creativity',
            'Customer Expectations For Creativity',
            'Personal Assumptions/beliefs About Own Creativity',
            'Evidence-based Assessment Of Creative Self-efficacy',
            'Commitment To Learning',
            'Shared Vision',
            'Open-mindedness',
            'Intraorganizational Knowledge Sharing',
            'Intrinsic Motivation',
            'Identified Regulation'
        );

        $userId = $request->userId;
        $histories = history::where('uid', $userId)->orderBy('id', 'desc')->get();
        $historyList = array();
        
        foreach($histories as $history){
            // return $history;
            $variabelList = array(
                'Perilaku Inovatif Guru'=>0,
                'Intensi Berinovasi'=>0,
                'Sikap Terhadap Inovasi'=>0,
                'Norma Subyektif terhadap Kreativitas'=>0,
                'Efikasi Berinovasi'=>0,
                'Budaya Organisasi Berorientasi Pembelajaran'=>0,
                'Self-Determination'=>0
            );
            $valueList = array(
                'Perilaku Inovatif Guru'=>'Rendah',
                'Intensi Berinovasi'=>'Rendah',
                'Sikap Terhadap Inovasi'=>'Rendah',
                'Norma Subyektif terhadap Kreativitas'=>'Rendah',
                'Efikasi Berinovasi'=>'Rendah',
                'Budaya Organisasi Berorientasi Pembelajaran'=>'Rendah',
                'Self-Determination'=>'Rendah'
            );
            $dimensiList = array(
                'Idea Generation'=>0,
                'Idea Promotion'=>0,
                'Idea Realization'=>0,
                'Intensi Berinovasi'=>0,
                'Support For Innovation'=>0,
                'Risk Of Tolerance'=>0,
                'Openness To External Knowledge'=>0,
                'Family Expectations For Creativity'=>0,
                'Leader Expectations For Creativity'=>0,
                'Customer Expectations For Creativity'=>0,
                'Personal Assumptions/beliefs About Own Creativity'=>0,
                'Evidence-based Assessment Of Creative Self-efficacy'=>0,
                'Commitment To Learning'=>0,
                'Shared Vision'=>0,
                'Open-mindedness'=>0,
                'Intraorganizational Knowledge Sharing'=>0,
                'Intrinsic Motivation'=>0,
                'Identified Regulation'=>0
            );

            $dimensiValue = array(
                'Idea Generation'=>"",
                'Idea Promotion'=>"",
                'Idea Realization'=>"",
                'Intensi Berinovasi'=>"",
                'Support For Innovation'=>"",
                'Risk Of Tolerance'=>"",
                'Openness To External Knowledge'=>"",
                'Family Expectations For Creativity'=>"",
                'Leader Expectations For Creativity'=>"",
                'Customer Expectations For Creativity'=>"",
                'Personal Assumptions/beliefs About Own Creativity'=>"",
                'Evidence-based Assessment Of Creative Self-efficacy'=>"",
                'Commitment To Learning'=>"",
                'Shared Vision'=>"",
                'Open-mindedness'=>"",
                'Intraorganizational Knowledge Sharing'=>"",
                'Intrinsic Motivation'=>"",
                'Identified Regulation'=>""
            );

            $lastupdated = null;
            $user = User::where('id', $userId)->first();

            foreach($history->soal as $jawaban){
                // return $jawaban;
                foreach($variabelDict as $var){
                    if($jawaban->variabel == $var){
                        $variabelList[$var]+= $jawaban->pivot->nilai;
                    }
                }

                foreach($dimensiDict as $dimensi){
                    if($jawaban->dimensi == $dimensi){
                        $dimensiList[$dimensi]+= $jawaban->pivot->nilai;

                        if($user->jenjang_mengajar == "PG/TK"){
                            if($dimensi == "Idea Generation"){
                                if($dimensiList[$dimensi] < 7.1){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 9.2){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 11.3){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 13.4){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Idea Promotion"){
                                if($dimensiList[$dimensi] < 6.3){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 8.6){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 10.9){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 13.2){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Idea Realization"){
                                if($dimensiList[$dimensi] < 7.1){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 9.2){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 11.3){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 13.4){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Intensi Berinovasi"){
                                if($dimensiList[$dimensi] < 20.5){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 23){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 25.5){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 28){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Support For Innovation"){
                                if($dimensiList[$dimensi] < 10.3){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 11.6){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 12.9){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 14.2){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Risk Of Tolerance"){
                                if($dimensiList[$dimensi] < 16){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 18){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 20){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 23){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Openness To External Knowledge"){
                                if($dimensiList[$dimensi] < 13){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 15){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 17){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 18){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Family Expectations For Creativity"){
                                if($dimensiList[$dimensi] < 13){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 14){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 16){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 18){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Leader Expectations For Creativity"){
                                if($dimensiList[$dimensi] < 17){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 19){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 21){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 23){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Customer Expectations For Creativity"){
                                if($dimensiList[$dimensi] < 13){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 14){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 16){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 18){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Personal Assumptions/beliefs About Own Creativity"){
                                if($dimensiList[$dimensi] < 16){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 18){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 20){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 23){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Evidence-based Assessment Of Creative Self-efficacy"){
                                if($dimensiList[$dimensi] < 25){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 29){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 33){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 36){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Commitment To Learning"){
                                if($dimensiList[$dimensi] < 23){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 24){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 26){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 28){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                            else if($dimensi == "Shared Vision"){
                                if($dimensiList[$dimensi] < 15){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 16){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 17){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 19){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Open-mindedness"){
                                if($dimensiList[$dimensi] < 17){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 18){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 21){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 23){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Intraorganizational Knowledge Sharing"){
                                if($dimensiList[$dimensi] < 17){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 19){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 21){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 23){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Intrinsic Motivation"){
                                if($dimensiList[$dimensi] < 11){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 12){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 13){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 14){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }else if($dimensi == "Identified Regulation"){
                                if($dimensiList[$dimensi] < 12){
                                    $dimensiValue[$dimensi] = "Sangat Rendah";
                                }else if($dimensiList[$dimensi] < 13){
                                    $dimensiValue[$dimensi] = "Rendah";
                                }else if($dimensiList[$dimensi] < 14){
                                    $dimensiValue[$dimensi] = "Cukup";
                                }else if($dimensiList[$dimensi] < 15){
                                    $dimensiValue[$dimensi] = "Tinggi";
                                }else{
                                    $dimensiValue[$dimensi] = "Sangat Tinggi";
                                }
                            }
                        }else if($user->jenjang_mengajar == "SD"){
            
                        }else if($user->jenjang_mengajar == "SMP"){
            
                        }else if($user->jenjang_mengajar == "SMA"){
            
                        }

                    }
                }

                $lastupdated = $jawaban->pivot->created_at->format('l, m-d-Y');
            }

            //Hitung value JANGAN LUPA
            $skalas = skala::where('jenjang_mengajar', $user->jenjang_mengajar)->get();

            foreach($skalas as $skala){
                foreach($variabelDict as $variabelname){
                    if($skala->variabel == $variabelname){
                        if($variabelList[$variabelname] < $skala->sangat_rendah){
                            $valueList[$variabelname] = "Sangat Rendah";
                        }else if($variabelList[$variabelname] < $skala->rendah){
                            $valueList[$variabelname] = "Rendah";
                        }else if($variabelList[$variabelname] < $skala->cukup){
                            $valueList[$variabelname] = "Cukup";
                        }else if($variabelList[$variabelname] < $skala->tinggi){
                            $valueList[$variabelname] = "Tinggi";
                        }else{
                            $valueList[$variabelname] = "Sangat Tinggi";
                        }
                    }
                }
            }

            


            $temp =array(
                'historyId'=> $history->id,
                'variabel'=> $variabelList,
                'value'=> $valueList,
                'dimensi'=>$dimensiList,
                'updated_at'=>$lastupdated
            );

            array_push($historyList, $temp);
        }

        return ["data" => $historyList];
    }
}
