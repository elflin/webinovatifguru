<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluasi_jawaban extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_progress',
        'jawaban1',
        'jawaban2',
        'jawaban3',
        'jawaban4',
        'jawaban5',
        'jawaban6',
        'jawaban7',
        'pesan_kesan',
    ];

    public function progress(){
        return $this->belongsTo(progress::class, "id_progress", "id");
    }
}
