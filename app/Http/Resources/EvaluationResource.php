<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EvaluationResource extends JsonResource
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
            'jawaban1' => $this->jawaban1,
            'jawaban2' => $this->jawaban2,
            'jawaban3' => $this->jawaban3,
            'jawaban4' => $this->jawaban4,
            'jawaban5' => $this->jawaban5,
            'jawaban6' => $this->jawaban6,
            'jawaban7' => $this->jawaban7,
            'pesan_kesan' => $this->pesan_kesan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
