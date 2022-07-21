<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProgressResource;
use App\Models\progress;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProgressController extends Controller
{
    //
    public function CreateProgress(Request $request){
        $progress = new progress();

        $progress->id_progress_histories = $request->id_progress_histories;
        $progress->id_pelatihan = $request->id_pelatihan;
        $progress->status = $request->status;
        if(isset($request->path_submission)){
            $progress->path_submission = $request->path_submission;
        }

        $progress->save();

        return ['status' => Response::HTTP_OK, 'id' => $progress->id];
    }

    public function UpdateProgress(Request $request){
        $progress = progress::where('id_progress_histories', $request->id_progress_histories)
        ->where('id_pelatihan', $request->id_pelatihan)
        ->first();

        if(!empty($progress)){
            $progress->status = $request->status;
            if(isset($request->path_submission)){
                $progress->path_submission = $request->path_submission;
            }

            $progress->save();

            return ['status' => Response::HTTP_OK];
        }else{
            return ['status' => Response::HTTP_NOT_FOUND];
        }
    }

    public function ShowProgress(Request $request){
        $progress = progress::where('id_progress_histories', $request->id_progress_histories)
        ->get();

        return ProgressResource::collection($progress);
    }

    public function UploadFile(Request $request){
        $validatedData = $request->validate([
            'file' => 'required|doc,docx,pdf|max:4096',
        ]);

        $file = 'submission_' . time() . '_' . $request['file']->getClientOriginalName();
        $request->file->move(public_path('submission'), $file);

        return [
            'status' => Response::HTTP_OK,
            'link_path' => 'submission/'.$file
        ];

    }
}
