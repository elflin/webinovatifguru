<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HistoryResource;
use App\Models\progress_history;
use App\Models\User;
use Illuminate\Http\Request;

class ProgressHistoryController extends Controller
{
    //

    public function createProgressHistory(Request $request){
        $progressHistory = new progress_history();

        $user = User::where('id', $request->id)->first();

        $progressHistory->user()->associate($user);
        $progressHistory->save();

        return['status'=>'Suksess', 'historyId'=>$progressHistory->id];

    }

    public function lastProgressHistory(Request $request){
        $progressHistory = progress_history::where('uid', $request->uid)
            ->latest()
            ->first();
            return new HistoryResource($progressHistory);
    }

}
