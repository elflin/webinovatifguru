<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_progress_histories',
        'id_pelatihan',
        'status',
        'path_submission'
    ];

    public function evaluasi_jawaban(){
        return $this->hasOne(evaluasi_jawaban::class, "id_progress", "id");
    }

    public function test_jawaban(){
        return $this->hasOne(test_jawaban::class, "id_progress", "id");
    }

    public function progress_histories(){
        return $this->belongsTo(progress_histories::class, "id_progress_histories", "id");
    }

    public function pelatihan(){
        return $this->belongsTo(pelatihan::class, "id_pelatihan", "id");
    }
}
