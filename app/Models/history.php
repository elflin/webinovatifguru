<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function soal(){
        return $this->belongsToMany(Soal::class, 'jawabans', 'historyId', 'soalId')
        ->withPivot('nilai')->withTimestamps();
    }
}
