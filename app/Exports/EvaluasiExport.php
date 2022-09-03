<?php

namespace App\Exports;

use App\Models\evaluasi_jawaban;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EvaluasiExport implements FromView
{
    public function view(): View
    {
        return view('admin.tables.evaluasi', [
            'evaluasi_jawabans' => evaluasi_jawaban::all()
        ]);
    }
}
