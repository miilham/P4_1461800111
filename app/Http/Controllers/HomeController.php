<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RakBuku;
use App\Exports\ExportRakBuku;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index(){
        $rakbuku=RakBuku::all();
        return view('welcome',compact('rakbuku'));
    }

    public function exportData(){
        return Excel::download(new ExportRakBuku, 'Data_1461800111.xlsx');
    }
}
