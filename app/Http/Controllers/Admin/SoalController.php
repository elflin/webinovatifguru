<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DataSoalExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soal;
use Maatwebsite\Excel\Facades\Excel;
use Auth;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soals = Soal::all();
        return view('admin.soalView', compact('soals'));
    }
    public function export(){
        return Excel::download(new DataSoalExport, 'export.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.soalCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Soal::create([
            'id' => ($request->id),
            'no_item' => ucwords(strtolower($request->no_item)),
            'variabel' => $request->variabel,
            'soal' => $request->soal,
            'dimensi' => ucwords(strtolower($request->dimensi)),
            'no_item' => ucwords(strtolower($request->no_item)),
            'ukuran' => ucwords(strtolower($request->ukuran)),
        ]);
        return redirect(route('admin.soal.index'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = Soal::findOrFail($id);
        return view('admin.soalEdit', compact('soal'));
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
        $soal = Soal::findOrFail($id);
        $soal->update([
            'id' => ($request->id),
            'no_item' => ucwords(strtolower($request->no_item)),
            'variabel' => $request->variabel,
            'soal' => $request->soal,
            'dimensi' => ucwords(strtolower($request->dimensi)),
            'no_item' => ucwords(strtolower($request->no_item)),
            'ukuran' => ucwords(strtolower($request->ukuran)),
        ]);
        return redirect()->route('admin.soal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soal = Soal::findOrFail($id);
        $soal->delete();
        return redirect()->route('admin.soal.index');
    }
}
