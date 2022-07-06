<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PelatihanResource;
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
        $pelatihan = pelatihan::all();

        return PelatihanResource::collection($pelatihan);
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
        if(!empty($request->link)){
            pelatihan::create([
                'judul' => ucwords($request->judul),
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'type' => $request->type
            ]);
        }else{
            pelatihan::create([
                'judul' => ucwords($request->judul),
                'deskripsi' => $request->deskripsi,
                'type' => $request->type
            ]);
        }

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
        $pelatihan = pelatihan::findOrFail($id);
        if(!empty($request->link)){
            $pelatihan->update([
                'judul' => ucwords($request->judul),
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'type' => $request->type
            ]);
        }else{
            $pelatihan->update([
                'judul' => ucwords($request->judul),
                'deskripsi' => $request->deskripsi,
                'type' => $request->type
            ]);
        }

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
        $pelatihan = pelatihan::findOrFail($id);
        $pelatihan->delete();
        return ['status'=>'Suksess'];
    }
}
