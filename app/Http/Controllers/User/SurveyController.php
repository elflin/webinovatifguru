<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\history;
use App\Models\jawaban;
use App\Models\Soal;
use App\Models\User;
use App\Models\skala;
use Auth;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = history::where('uid', Auth::user()->id)
            ->latest()
            ->get();

        if(!isset($history[0]->id)){
            return view('user.firstSurvey');
        } else {
            $variabels = array(
                'Perilaku Inovatif Guru',
                'Intensi Berinovasi',
                'Sikap Terhadap Inovasi',
                'Norma Subyektif terhadap Kreativitas',
                'Efikasi Berinovasi',
                'Budaya Organisasi Berorientasi Pembelajaran',
                'Self-Determination'
            );

            // GET NILAI JAWABAN
            $jawaban = Jawaban::where('historyId', $history[0]->id)->get();

            // COBA TAMPIL NILAI
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
    
            $userId = Auth::id();
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
    
                $lastupdated = null;
    
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
                        }
                    }
    
                    $lastupdated = $jawaban->pivot->created_at->format('l, m-d-Y');
                }
    
                //Hitung value JANGAN LUPA
                $user = User::where('id', $userId)->first();
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
    
            // dd($historyList);
            return view('user.survey', compact('variabels', 'history', 'jawaban', 'historyList'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $history = new history();

        // $user = Auth::user();

        // $history->user()->associate($user);
        // $history->save();

        // HITUNG TOTAL NILAI
        $jumlahSoal = (int)$request->jumlahSoal;
        $total = 0;
        // for ($x = 1; $x <= $jumlahSoal; $x++) {
        //     $total += $request->$x;
        // }
        
        for ($x = 1; $x <= $jumlahSoal; $x++) {
            $soalnya = "soalId" . (string)$x;
            jawaban::create([
                'historyId' => $request->historyId,
                'soalId' => $request->$soalnya,
                'nilai' => $request->$x,
            ]);
        }

        return redirect()->route('user.survey.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $variabel
     * @return \Illuminate\Http\Response
     */
    public function show($variabel)
    {
        $soals = null;

        $soals = Soal::where('variabel', $variabel)
        ->orderBy('id')
        ->get();

        $history = history::where('uid', Auth::user()->id)
            ->latest()
            ->get();

        return view('user.surveySoal', compact('soals', 'history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createHistory($id){
        $history = new history();

        $user = User::where('id', $id)->first();

        $history->user()->associate($user);
        $history->save();

        return redirect()->route('user.survey.index');
    }
}
