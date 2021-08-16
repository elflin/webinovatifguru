<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'no_item',
        'variabel',
        'soal',
        'dimensi',
        'ukuran'
    ];

    public function history(){
        return $this->belongsToMany(history::class, 'jawabans', 'soalId', 'historyId');
    }
}
