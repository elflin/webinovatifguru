<?php

namespace App\Exports;

use App\Models\pelatihan;
use App\Models\progress;
use App\Models\progress_history;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromView;

class AllPelatihanExport implements FromView
{
    public function view(): View
    {
        return view('admin.tables.allpelatihan', [
            'progresshistories' => progress_history::whereHas('progress', function (Builder $query) {
                $query->whereHas('pelatihan', function (Builder $query) {
                    $query->where('type', 'tes');
                });
            })->get()
        ]);
    }
}
