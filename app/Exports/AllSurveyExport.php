<?php

namespace App\Exports;

use App\Models\history;
use App\Models\skala;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class AllSurveyExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $histories = history::orderBy('id', 'desc')->get();
        $scales = skala::all();
        return view('admin.tables.allsurvey', [
            'histories' => $histories,
            'scales' => $scales
        ]);
    }
}
