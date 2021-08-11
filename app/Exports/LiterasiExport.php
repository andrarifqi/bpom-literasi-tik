<?php

namespace App\Exports;

use App\Models\Responden;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
// use Maatwebsite\Excel\Concerns\FromCollection;

class LiterasiExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Responden::all();
    // }

    use Exportable;

    public function query()
    {
        return Responden::query()->select('kuisioner', 'tahun_kuisioner')
                         ->selectRaw("SUM(CASE WHEN response = 'sangat tidak setuju' THEN 1 ELSE 0 END) AS sum_sts, ".
                                     "SUM(CASE WHEN response = 'tidak setuju' THEN 1 ELSE 0 END) AS sum_ts, ".
                                     "SUM(CASE WHEN response = 'tidak tahu' THEN 1 ELSE 0 END) AS sum_th, ".
                                     "SUM(CASE WHEN response = 'setuju' THEN 1 ELSE 0 END) AS sum_s, ".
                                     "SUM(CASE WHEN response = 'sangat setuju' THEN 1 ELSE 0 END) AS sum_ss")
                         ->groupBy('kuisioner');
    }

    public function map($respon): array
    {
        return [
            $respon->kuisioner,
            $respon->tahun_kuisioner,
            $respon->sum_sts,
            $respon->sum_ts,
            $respon->sum_th,
            $respon->sum_s,
            $respon->sum_ss,
        ];
    }

    public function headings(): array
    {
        return [
            'Kuesioner',
            'Tahun',
            'Sangat Tidak Setuju',
            'Tidak Setuju',
            'Tidak Tahu',
            'Setuju',
            'Sangat Setuju'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
    
}