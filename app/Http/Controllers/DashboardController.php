<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Logika atau pemrosesan data untuk halaman dashboard

        return view('dashboard'); // Ganti "dashboard.index" dengan nama file blade untuk halaman dashboard Anda
    }
}
