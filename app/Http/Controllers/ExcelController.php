<?php

namespace App\Http\Controllers;

use App\Imports\BarangImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function importBarang()
    {
        Excel::import(new BarangImport, request()->file('file_excel'));

        return redirect()->route('barang.index')->with('success', 'Data import successfully');
    }
}
