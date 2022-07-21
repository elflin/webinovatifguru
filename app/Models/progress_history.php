<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class progress_history extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'uid',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    public function progress(){
        return $this->hasMany(progress::class, "id_progress_histories", "id");
    }

}
