<?php

namespace App\Exports;

use App\Models\Persib;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;

class PersibExport implements FromView, WithTitle
{
    private $data;
    private $month;

    public function __construct($month)
    {
        $this->month  = $month;
        $this->data = Persib::all();
    }

    public function view(): View
    {
        return view('export', [
            'shows' => $this->data
        ]);
    }

    public function title(): string
    {
        return 'Month ' . $this->month;
    }
}
