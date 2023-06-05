<?php

namespace App\Http\Controllers;
use App\Models\Absensi;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $absensi = Absensi::with('RSales',)->paginate(100);
        return view('absensi.index', [
            'absensi' => $absensi,
            
        ]);
    }

    // addview buat menambah data
    // juga untuk dropdown pemilihan ketika pemilihan id_sales pada create
    public function addView()
    {
        // $sales sebagai perantara jadi $sales = model Sales dan model tersebut memanggil tabel sales
        $sales_ = Sales::all();
        return view('absensi.create',compact('sales_'));
    }

    //store buat menampilkan hasil tambah data ke halam index awal
    public function store(Request $request)
    {
        $data = [
            'id_sales' => $request-> input('id_sales'),
            'tgl_masuk' => $request-> input('tgl_masuk'),
            'tgl_keluar' => $request-> input('tgl_keluar'),
            //carbon buat ngisi tanggal otomatis
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
        Absensi::create($data);
        return redirect()->route('absensi.index');
    }

    //function edit
    public function edit($id)
    {
        $sales_ = Sales::all();
        $absensi = Absensi::findOrFail($id);
        return view ('absensi.edit', compact('absensi','sales_',));
    }

    public function update(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->id_sales = $request->id_sales;
        $absensi->tgl_masuk = $request->tgl_masuk;
        $absensi->tgl_keluar = $request->tgl_keluar;
        $absensi->save();

        return redirect('/absensi');
    }

    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi ->delete();
        return redirect('/absensi');
    }
}
