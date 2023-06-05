<?php

namespace App\Http\Controllers;
use App\Models\Ijin;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IjinController extends Controller
{
    //
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $ijin = Ijin::paginate(5);
        return view('ijin.index', [
            'ijin' => $ijin,
        ]);
    }

    // addview buat menambah data
    public function addView()
    {
        return view('ijin.create');
    }

    //store buat menampilkan hasil tambah data ke halam index awal
    public function store(Request $request)
    {
        $data = [
            'jenis_ijin' => $request-> input('jenis_ijin'),
            'deskripsi' => $request-> input('deskripsi'),
            //carbon buat ngisi tanggal otomatis
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
        Ijin::create($data);
        return redirect()->route('ijin.index');
    }

    //function edit
    public function edit($id)
    {
        $ijin = Ijin::findOrFail($id);
        return view ('ijin.edit', compact('ijin'));
    }

    public function update(Request $request, $id)
    {
        $ijin = Ijin::findOrFail($id);
        $ijin->jenis_ijin = $request->jenis_ijin;
        $ijin->deskripsi = $request->deskripsi;
        $ijin->save();

        return redirect('/ijin');
    }

    public function destroy($id)
    {
        $ijin = Ijin::findOrFail($id);
        $ijin ->delete();
        return redirect('/ijin');
    }
}
