<?php

namespace App\Http\Controllers;
use App\Models\Sales;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function sales()
    {
    // Logika untuk laporan sales
    return view('reports.sales');
    }
}
