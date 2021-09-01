<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HistoryResource;
use App\Models\history;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function createHistory(Request $request){
        $history = new history();

        $user = User::where('id', $request->id)->first();

        $history->user()->associate($user);
        $history->save();

        return['status'=>'Suksess', 'historyId'=>$history->id];
        // return $user;
    }

    public function getHistoryById(Request $request){
        $history = null;

        if(!empty($request->isAll)){
            $history = history::where('uid', $request->uid)
            ->latest()
            ->get();
            return HistoryResource::collection($history);
        }else{
            $history = history::where('uid', $request->uid)
            ->latest()
            ->first();
            return new HistoryResource($history);
        }

        
    }
}
