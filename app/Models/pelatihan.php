<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'judul',
        'deskripsi',
        'link',
        'link_ppt',
        'type'
    ];

    public function progress(){
        return $this->hasMany(progress::class, "id_pelatihan", "id");
    }

    public function test_soal(){
        return $this->hasMany(test_soal::class, "id_pelatihan", "id");
    }
}
