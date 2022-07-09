<?php

namespace App\Exports;

use App\Models\Persib;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;

class PersibExport implements FromView
{
    public function view(): View
    {
        return view('export', [
            'shows' => Persib::all()
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:C1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('DD4B39');
            },
        ];
    }

    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => [self::class, 'afterSheet']
    //     ];
    // }

    // public static function afterSheet(AfterSheet $event)
    // {
    //     //Single Column
    //     $event->sheet->styleCells(
    //         'A1',
    //         [
    //             'alignment' => [
    //                 'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    //             ],
    //             'fill' => [
    //                 'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
    //                 'color' => ['argb' => '#9B4545']
    //             ]
    //         ]
    //     );

    //     //Range Columns
    //     $event->sheet->styleCells(
    //         'B2:E2',
    //         [
    //             'alignment' => [
    //                 'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    //             ],
    //             'fill' => [
    //                 'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
    //                 'color' => ['argb' => '#9B4545']
    //             ]
    //         ]
    //     );
    // }
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