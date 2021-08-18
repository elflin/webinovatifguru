<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SoalResource extends JsonResource
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
            'id' => $this->id,
            'no_item,' => $this->no_item,
            'variabel' => $this->variabel,
            'soal' => $this->soal,
            'dimensi' => $this->dimensi,
            'ukuran' => $this->ukuran,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
