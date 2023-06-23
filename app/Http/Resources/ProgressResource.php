<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgressResource extends JsonResource
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
            'id_progress_histories' => $this->id_progress_histories,
            'id_pelatihan' => $this->id_pelatihan,
            'status' => $this->status,
            'path_submission' => $this->path_submission,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}