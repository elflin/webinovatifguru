<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_pernikahan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'status_pernikahan');
    }
}
