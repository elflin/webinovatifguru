<?php

namespace App\Http\Resources;

use App\Models\progress;
use Illuminate\Http\Resources\Json\JsonResource;

class PelatihanResource extends JsonResource
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
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'link' => $this->link,
            'type' => $this->type,
            'status' => $this->progress()->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
