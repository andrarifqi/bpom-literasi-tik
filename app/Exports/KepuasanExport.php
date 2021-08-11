<?php

namespace App\Exports;


use App\Models\ResponKepuasan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
// use Maatwebsite\Excel\Concerns\FromCollection;

class KepuasanExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
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
        return ResponKepuasan::query()->select('kuisioner_kepuasan', 'tahun_kuisioner')
                         ->selectRaw("SUM(CASE WHEN respon_kepuasan = 'sangat tidak setuju' THEN 1 ELSE 0 END) AS sum_sts, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'tidak setuju' THEN 1 ELSE 0 END) AS sum_ts, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'tidak tahu' THEN 1 ELSE 0 END) AS sum_th, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'setuju' THEN 1 ELSE 0 END) AS sum_s, ".
                                     "SUM(CASE WHEN respon_kepuasan = 'sangat setuju' THEN 1 ELSE 0 END) AS sum_ss")
                         ->groupBy('kuisioner_kepuasan');
    }

    public function map($respon): array
    {
        return [
            $respon->kuisioner_kepuasan,
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