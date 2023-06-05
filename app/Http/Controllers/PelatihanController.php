<?php

namespace App\Http\Controllers;

use App\Models\Jenispelatihan;
use App\Models\Pelatihan;
use App\Models\Pendidikan;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $pelatihan = Pelatihan::with('RSales','RPendidikan','RJenispelatihan')->paginate(100);
        return view('pelatihan.index', [
            'pelatihan' => $pelatihan,
        ]);
    }

    // addview buat menambah data
    // juga untuk dropdown pemilihan ketika pemilihan id_sales pada create
    public function addView()
    {
        // $sales sebagai perantara jadi $sales = model Sales dan model tersebut memanggil tabel sales
        $sales_ = Sales::all();
        $pendidikan_ = Pendidikan::all();
        $jenispelatihan_ = Jenispelatihan::all();
        return view('pelatihan.create',compact('sales_','pendidikan_','jenispelatihan_'));
    }

    //store buat menampilkan hasil tambah data ke halam index awal
    public function store(Request $request)
    {
        $data = [
            'id_sales' => $request-> input('id_sales'),
            'id_pendidikan' => $request-> input('id_pendidikan'),
            'id_jenispelatihan' => $request-> input('id_jenispelatihan'),
            'waktu' => $request-> input('waktu'),
            //carbon buat ngisi tanggal otomatis
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
        Pelatihan::create($data);
        return redirect()->route('pelatihan.index');
    }

    //function edit
    public function edit($id)
    {
        $sales_ = Sales::all();
        $pendidikan_ = Pendidikan::all();
        $jenispelatihan_ = Jenispelatihan::all();
        $pelatihan = Pelatihan::findOrFail($id);
        return view ('pelatihan.edit', compact('pelatihan','sales_','pendidikan_','jenispelatihan_',));
    }

    public function update(Request $request, $id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        $pelatihan->id_sales = $request->id_sales;
        $pelatihan->id_pendidikan = $request->id_pendidikan;
        $pelatihan->id_jenispelatihan = $request->id_jenispelatihan;
        $pelatihan->waktu = $request->waktu;
        $pelatihan->save();

        return redirect('/pelatihan');
    }

    public function destroy($id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        $pelatihan ->delete();
        return redirect('/pelatihan');
    }

}
