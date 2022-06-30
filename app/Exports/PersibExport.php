<?php

namespace App\Exports;

use App\Models\Persib;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PersibExport implements FromView
{
    public function view(): View
    {
        return view('export', [
            'shows' => Persib::all()
        ]);
    }
}

// class PersibExport implements FromCollection
// {
//     /**
//      * @return \Illuminate\Support\Collection
//      */
//     public function collection()
//     {
//         return Persib::all();
//     }
// }