<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestSoalResource;
use App\Models\test_soal;
use Illuminate\Http\Request;

class TestSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testSoal = test_soal::all();
        return TestSoalResource::collection($testSoal);
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
        test_soal::create([
            'id_pelatihan' => $this->id_pelatihan,
            'soal' => $this->soal,
            'jawabanA' => $this->jawabanA,
            'jawabanB' => $this->jawabanB,
            'jawabanC' => $this->jawabanC,
            'jawabanD' => $this->jawabanD,
            'jawabanE' => $this->jawabanE,
            'kunci' => $this->kunci
        ]);

        return ['status'=>'Suksess'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $testSoal = test_soal::where('id_pelatihan', $id)->get();
        return TestSoalResource::collection($testSoal);
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
        $testSoal = test_soal::findOrFail($id);

        $testSoal->update([
            'soal' => $this->soal,
            'jawabanA' => $this->jawabanA,
            'jawabanB' => $this->jawabanB,
            'jawabanC' => $this->jawabanC,
            'jawabanD' => $this->jawabanD,
            'jawabanE' => $this->jawabanE,
            'kunci' => $this->kunci
        ]);

        return ['status'=>'Suksess'];
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
