<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $searchQuery = $request->query('q'); // Mengambil nilai parameter pencarian dari URL
        
        // Lakukan logika pencarian sesuai kebutuhan Anda
        // Misalnya, dapatkan data dari database berdasarkan pencarian
        $results = Sales::where('nama_sales', 'like', '%' . $searchQuery . '%')->pluck('nama_sales');;

        // Kirim hasil pencarian ke tampilan
        return view('search.results', compact('results', 'searchQuery'));
    }

}
