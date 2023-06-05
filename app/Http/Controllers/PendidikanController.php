<?php

namespace App\Http\Controllers;
use App\Models\Pendidikan;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $pendidikan = Pendidikan::with('RSales',)->paginate(100);
        return view('pendidikan.index', [
            'pendidikan' => $pendidikan,
        ]);
    }

    // addview buat menambah data
    public function addView()
    {
        $sales_ = Sales::all();
        return view('pendidikan.create',compact('sales_'));
    }

    //store buat menampilkan hasil tambah data ke halam index awal
    public function store(Request $request)
    {
        $data = [
            'id_sales' => $request-> input('id_sales'),
            'pendidikan_terakhir' => $request-> input('pendidikan_terakhir'),
            'minat_pendidikan' => $request-> input('minat_pendidikan'),
            //carbon buat ngisi tanggal otomatis
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
        Pendidikan::create($data);
        return redirect()->route('pendidikan.index');
    }

    public function edit($id)
    {
        $sales_ = Sales::all();
        $pendidikan = Pendidikan::findOrFail($id);
        return view ('pendidikan.edit', compact('pendidikan','sales_',));
    }

    public function update(Request $request, $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->id_sales = $request->id_sales;
        $pendidikan->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pendidikan->minat_pendidikan = $request->minat_pendidikan;
        $pendidikan->save();

        return redirect('/pendidikan');
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan ->delete();
        return redirect('/pendidikan');
    }
}
