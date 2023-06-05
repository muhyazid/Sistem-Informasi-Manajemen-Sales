<?php

namespace App\Http\Controllers;
use App\Models\Gaji;
use App\Models\Sales;
use Carbon\Carbon;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $gaji = Gaji::with('RSales',)->paginate(100);
        return view('gaji.index', [
            'gaji' => $gaji,
        ]);
    }

    // addview buat menambah data
    public function addView()
    {
        $sales_ = Sales::all();
        return view('gaji.create',compact('sales_'));
    }

     //store buat menampilkan hasil tambah data ke halam index awal
     public function store(Request $request)
     {
         $data = [
             'id_sales' => $request-> input('id_sales'),
             'nama_sales' => $request-> input('nama_sales'),
             'gaji_pokok' => $request-> input('gaji_pokok'),
             'potongan_gaji' => $request-> input('potongan_gaji'),
             'bonus' => $request-> input('bonus'),
             'total_gaji' => $request-> input('total_gaji'),
             'tgl_gajian' => $request-> input('tgl_gajian'),
             //carbon buat ngisi tanggal otomatis
             'update_at' => Carbon::now(),
             'created_at' => Carbon::now(),
         ];
         Gaji::create($data);
         return redirect()->route('gaji.index');
     }

     public function edit($id)
    {
        $sales_ = Sales::all();
        $gaji = Gaji::findOrFail($id);
        return view ('gaji.edit', compact('gaji','sales_',));
    }

    public function update(Request $request, $id)
    {
        $gaji = Gaji::findOrFail($id);
        $gaji->id_sales = $request->id_sales;
        $gaji->gaji_pokok = $request->gaji_pokok;
        $gaji->potongan_gaji = $request->potongan_gaji;
        $gaji->bonus = $request->bonus;
        $gaji->total_gaji = $request->total_gaji;
        $gaji->tgl_gajian = $request->tgl_gajian;
        $gaji->save();

        return redirect('/gaji');
    }

    public function destroy($id)
    {
        $gaji = Gaji::findOrFail($id);
        $gaji ->delete();
        return redirect('/gaji');
    }

}
