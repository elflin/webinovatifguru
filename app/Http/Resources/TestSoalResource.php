<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestSoalResource extends JsonResource
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
            'id'=> $this->id,
            'soal'=> $this->soal,
            'jawabanA'=> $this->jawabanA,
            'jawabanB'=> $this->jawabanB,
            'jawabanC'=> $this->jawabanC,
            'jawabanD'=> $this->jawabanD,
            'jawabanE'=> $this->jawabanE,
            'kunci'=> $this->kunci
        ];
    }
}
