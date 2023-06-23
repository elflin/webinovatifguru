<?php

namespace App\Http\Resources;

use App\Models\Soal;
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
            'historyId'=>$this->historyId,
            'soal'=>new SoalJawabanResource(Soal::find($this->soalId)),
            'nilai'=>$this->nilai
        ];
    }
}
