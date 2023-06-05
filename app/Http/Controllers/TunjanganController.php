<?php

namespace App\Http\Controllers;
use App\Models\Tunjangan;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TunjanganController extends Controller
{
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $tunjangan = Tunjangan::with('RSales',)->paginate(100);
        return view('tunjangan.index', [
            'tunjangan' => $tunjangan,
        ]);
    }

    // addview buat menambah data
    // juga untuk dropdown pemilihan ketika pemilihan id_sales pada create
    public function addView()
    {
        // $sales sebagai perantara jadi $sales = model Sales dan model tersebut memanggil tabel sales
        $sales_ = Sales::all();
        return view('tunjangan.create',compact('sales_'));
    }

    //store buat menampilkan hasil tambah data ke halam index awal
    public function store(Request $request)
    {
        $data = [
            'id_sales' => $request-> input('id_sales'),
            'tunjangan_kesehatan' => $request-> input('tunjangan_kesehatan'),
            'tunjangan_transportasi' => $request-> input('tunjangan_transportasi'),
            'tunjangan_makan' => $request-> input('tunjangan_makan'),
            'total_tunjangan' => $request-> input('total_tunjangan'),
            //carbon buat ngisi tanggal otomatis
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
        Tunjangan::create($data);
        return redirect()->route('tunjangan.index');
    }

    public function edit($id)
    {
        $sales_ = Sales::all();
        $tunjangan = Tunjangan::findOrFail($id);
        return view ('tunjangan.edit', compact('tunjangan','sales_',));
    }

    public function update(Request $request, $id)
    {
        $tunjangan = Tunjangan::findOrFail($id);
        $tunjangan->id_sales = $request->id_sales;
        $tunjangan->tunjangan_kesehatan = $request->tunjangan_kesehatan;
        $tunjangan->tunjangan_transportasi = $request->tunjangan_transportasi;
        $tunjangan->tunjangan_makan = $request->tunjangan_makan;
        $tunjangan->total_tunjangan = $request->total_tunjangan;

        $tunjangan->save();

        return redirect('/tunjangan');
    }

    public function destroy($id)
    {
        $tunjangan = Tunjangan::findOrFail($id);
        $tunjangan ->delete();
        return redirect('/tunjangan');
    }
}
