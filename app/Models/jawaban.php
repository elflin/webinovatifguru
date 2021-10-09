<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Jawaban extends Pivot
{
    //
    protected $table = 'jawabans';

    protected $fillable = [
        'id',
        'historyId',
        'soalId',
        'nilai',
    ];
}
