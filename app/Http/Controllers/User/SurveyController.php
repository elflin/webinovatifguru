<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\history;
use App\Models\Soal;
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
        $variabels = array(
            'Perilaku Inovatif Guru',
            'Intensi Berinovasi',
            'Sikap Terhadap Inovasi',
            'Norma Subyektif terhadap Kreativitas',
            'Efikasi Berinovasi',
            'Budaya Organisasi Berorientasi Pembelajaran',
            'Self-Determination'
        );

        $history = history::where('uid', Auth::user()->id)
            ->latest()
            ->get();

        return view('user.survey', compact('variabels', 'history'));
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
        //
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

        return view('user.surveySoal', compact('soals'));
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
}
