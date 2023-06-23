<?php

namespace App\Exports;

use App\Models\Soal;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataSoalExport implements FromView
{
    public function view(): View
    {
        return view('admin.tables.datasoal', [
            'soals' => Soal::all()
        ]);
    }
}
