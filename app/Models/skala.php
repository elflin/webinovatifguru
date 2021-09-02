<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skala extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'jenjang_mengajar',
        'variabel',
        'sangat_rendah',
        'rendah',
        'cukup',
        'tinggi'
    ];
}
