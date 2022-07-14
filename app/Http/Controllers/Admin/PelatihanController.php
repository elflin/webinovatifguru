<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelatihans = pelatihan::all();
        return view('admin.pelatihan.index', compact('pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pelatihan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'type' => $request->type
        ]);
        return redirect(route('admin.pelatihan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(pelatihan $pelatihan)
    {
        return view('admin.pelatihan.show', compact('pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelatihan $pelatihan)
    {
        return view('admin.pelatihan.edit', compact('pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function soal_baru(pelatihan $pelatihan)
    {
        return view('admin.pelatihan.soal_baru', compact('pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelatihan $pelatihan)
    {
        $pelatihan->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'type' => $request->type
        ]);

        return redirect()->route('admin.pelatihan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return redirect()->route('admin.pelatihan.index');
    }
}
