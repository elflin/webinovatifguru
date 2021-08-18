<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'usia'=>$this->usia,
            'jenis_kelamin'=>$this->jenis_kelamin,
            'status_pernikahan'=>$this->status_pernikahan,
            'jumlah_anak'=>$this->jumlah_anak,
            'asal_sekolah'=>$this->asal_sekolah,
            'lama_mengajar'=>$this->lama_mengajar,
            'jenjang_mengajar'=>$this->jenjang_mengajar,
            'mata_pelajaran'=>$this->mata_pelajaran,
            'pendidikan'=>$this->pendidikan,
            'isIlmuPendidikan'=>$this->isIlmuPendidikan
        ];
    }
}
