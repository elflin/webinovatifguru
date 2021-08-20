<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JawabanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'historyId'=>$this->id,
            'soal'=>new SoalResource($this->soal()),
            'jawaban'=>$this->whenPivotLoaded('jawabans', function(){
                return $this->pivot->nilai;
            })
        ];
    }
}
