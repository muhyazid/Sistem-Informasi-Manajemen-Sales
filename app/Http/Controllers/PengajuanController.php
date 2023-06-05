<?php

namespace App\Http\Controllers;

use App\Models\Ijin;
use App\Models\Pengajuan;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    //
    public function index()
    {
        // paginate itu seperti slide banyaknya jumlah barang
        $pengajuan = Pengajuan::with('RSales','RIjin',)->paginate(100);
        return view('pengajuanijin.index', [
            'pengajuanijin' => $pengajuan,
        ]);
    }

    // addview buat menambah data
    public function addView()
    {
        // $sales sebagai perantara jadi $sales = model Sales dan model tersebut memanggil tabel sales
        $sales_ = Sales::all();
        $ijin_ = Ijin::all();
        return view('pengajuanijin.create',compact('sales_','ijin_'));
    }

    //store buat menampilkan hasil tambah data ke halam index awal
    public function store(Request $request)
    {
        $data = [
            'id_sales' => $request-> input('id_sales'),
            'id_jenisijin' => $request-> input('id_jenisijin'),
            'alasan_pengajuan' => $request-> input('alasan_pengajuan'),
            'tgl_pengajuan' => $request-> input('tgl_pengajuan'),
            'status' => $request-> input('status'),
            //carbon buat ngisi tanggal otomatis
            'update_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
        Pengajuan::create($data);
        return redirect()->route('pengajuanijin.index');
    }

    public function edit($id)
    {
        $sales_ = Sales::all();
        $ijin_ = Ijin::all();
        $pengajuanijin = Pengajuan::findOrFail($id);
        return view ('pengajuanijin.edit', compact('pengajuanijin','sales_','ijin_',));
    }

    public function update(Request $request, $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->id_sales = $request->id_sales;
        $pengajuan->id_jenisijin = $request->id_jenisijin;
        $pengajuan->alasan_pengajuan = $request->alasan_pengajuan;
        $pengajuan->tgl_pengajuan = $request->tgl_pengajuan;
        $pengajuan->status = $request->status;
        $pengajuan->save();

        return redirect('/pengajuanijin');
    }

    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan ->delete();
        return redirect('/pengajuanijin');
    }
}
