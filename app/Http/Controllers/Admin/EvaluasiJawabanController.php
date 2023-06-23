<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EvaluasiExport;
use App\Http\Controllers\Controller;
use App\Models\evaluasi_jawaban;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EvaluasiJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluasi_jawabans = evaluasi_jawaban::all();
        return view('admin.evaluasi.index', compact('evaluasi_jawabans'));
    }
    public function export(){
        return Excel::download(new EvaluasiExport, 'evaluasi-export.xlsx');
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
     * @param  \App\Models\evaluasi_jawaban  $evaluasi_jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(evaluasi_jawaban $evaluasi_jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\evaluasi_jawaban  $evaluasi_jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(evaluasi_jawaban $evaluasi_jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\evaluasi_jawaban  $evaluasi_jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evaluasi_jawaban $evaluasi_jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\evaluasi_jawaban  $evaluasi_jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(evaluasi_jawaban $evaluasi_jawaban)
    {
        //
    }
}
