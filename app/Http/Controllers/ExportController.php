<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\KepuasanExport;
use App\Exports\LiterasiExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\ExportController;

class ExportController extends Controller
{
    public function export_excel_literasi() {

        return Excel::download(new LiterasiExport, 'Kuesioner Literasi TIK.xlsx');
    }

    public function export_excel_kepuasan() {

        return Excel::download(new KepuasanExport, 'Kuesioner Kepuasan TIK.xlsx');
    }
}