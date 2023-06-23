<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_soal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_pelatihan',
        'soal',
        'jawabanA',
        'jawabanB',
        'jawabanC',
        'jawabanD',
        'jawabanE',
        'kunci',
    ];

    public function test_jawaban(){
        return $this->hasMany(test_jawaban::class, "id_test_soal", "id");
    }

    public function pelatihan(){
        return $this->belongsTo(pelatihan::class, "id_pelatihan", "id");
    }
}
