<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $soals = test_soal::all();
        return view('admin.pelatihan.soalView', compact('soals'));
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
        test_soal::create([
            'id_pelatihan' => $request->id_pelatihan,
            'soal' => $request->soal,
            'jawabanA' => $request->jawabanA,
            'jawabanB' => $request->jawabanB,
            'jawabanC' => $request->jawabanC,
            'jawabanD' => $request->jawabanD,
            'jawabanE' => $request->jawabanE,
            'kunci' => $request->kunci
        ]);

        return redirect()->route('admin.pelatihan.show', $request->id_pelatihan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\test_soal  $test_soal
     * @return \Illuminate\Http\Response
     */
    public function show(test_soal $test_soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\test_soal  $test_soal
     * @return \Illuminate\Http\Response
     */
    public function edit(test_soal $test_soal)
    {
        return view('admin.pelatihan.edit_soal', compact('test_soal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test_soal  $test_soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test_soal $test_soal)
    {
        $test_soal->update([
            'soal' => $request->soal,
            'jawabanA' => $request->jawabanA,
            'jawabanB' => $request->jawabanB,
            'jawabanC' => $request->jawabanC,
            'jawabanD' => $request->jawabanD,
            'jawabanE' => $request->jawabanE,
            'kunci' => $request->kunci
        ]);

        return redirect()->route('admin.pelatihan.show', $request->id_pelatihan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\test_soal  $test_soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(test_soal $test_soal)
    {
        //
    }
}
