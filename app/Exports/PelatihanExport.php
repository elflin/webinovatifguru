<?php

namespace App\Exports;

use App\Models\pelatihan;
use App\Models\progress;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromView;

class PelatihanExport implements FromView
{
    protected $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $id = $this->id;
        return view('admin.tables.pelatihan', [
            'progresses' => progress::whereHas('progress_histories', function (Builder $query) use ($id) {
                $query->where('uid', $id);
            })->whereHas('pelatihan', function (Builder $query) use ($id) {
                $query->where('type', 'tes');
            })->orderBy('id')->get(),
            'id'=> $id
        ]);
    }
}
