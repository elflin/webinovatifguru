<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_jawaban extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_progress',
        'id_test_soal',
        'jawaban'
    ];

    public function progress(){
        return $this->belongsTo(progress::class, "id_progress", "id");
    }

    public function test_soal(){
        return $this->belongsTo(test_soal::class, "id_test_soal", "id");
    }
}
