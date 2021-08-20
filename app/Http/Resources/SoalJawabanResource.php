<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SoalJawabanResource extends JsonResource
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
            'dimensi' => $this->dimensi,
            'ukuran' => $this->ukuran,
        ];
    }
}
