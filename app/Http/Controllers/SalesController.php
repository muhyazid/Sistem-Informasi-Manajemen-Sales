<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $sales = Sales::paginate(5);
        return view('sales.index', [
            'sales' => $sales,
        ]);
    }

    public function addView()
    {
        return view('sales.create');
    }

    //store buat menampilkan hasil tambah data ke halam index awal
    public function store(Request $request)
    {
        $data = [
            'nama_sales' => $request-> input('nama_sales'),
            'username' => $request-> input('username'),
            'password' => $request-> input('password'),
            'email' => $request-> input('email'),
            'alamat' => $request-> input('alamat'),
            //carbon buat ngisi tanggal otomatis
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
        Sales::create($data);
        return redirect()->route('sales.index');
    }

    //function edit
    public function edit($id)
    {
        $sales = Sales::findOrFail($id);
        return view ('sales.edit', compact('sales'));
    }

    public function update(Request $request, $id)
    {
        $sales = Sales::findOrFail($id);
        $sales->nama_sales = $request->nama_sales;
        $sales->username = $request->username;
        $sales->password = $request->password;
        $sales->alamat = $request->alamat;
        $sales->email = $request->email;
        $sales->save();

        return redirect('/sales');
    }

    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales ->delete();
        return redirect('/sales');
    }
}
