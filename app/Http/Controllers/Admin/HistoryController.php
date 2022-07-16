<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jawaban;
use App\Models\history;
use App\Models\pelatihan;
use App\Models\progress;
use Illuminate\Database\Eloquent\Builder;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        // $history = Jawaban::whereIn('id', function($query) use ($user){
        //     $query->select('id')->from('histories')->whereNotIn('uid', $user);
        // })->get();
        $histories = history::all()->where('uid', $id);
        $history = $histories->last();

        $pelatihans = pelatihan::whereHas('progress', function (Builder $query) use ($id) {
            $query->whereHas('progress_histories', function (Builder $query) use ($id) {
                $query->where('uid', $id);
            });
        })->where('type', 'tes')->get();
        // $jawabans = Jawaban::where('historyId', $history->id)->get();

        return view('admin.userShowHistory', compact('user', 'history', 'pelatihans'));
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
