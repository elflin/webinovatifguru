<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
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
            'id_progress' => $this->id_progress,
            'id_test_soal' => $this->id_test_soal,
            'jawaban' => $this->jawaban,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
