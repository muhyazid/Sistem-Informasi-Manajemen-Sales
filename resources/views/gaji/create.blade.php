@extends('layouts.home')
@section('sub-title', 'Tambah Data Gaji')
@section('content')
    <form action="{{ route('gaji.store') }}" method="POST" class="">
        @csrf
        <div class="form-group">
            <label for="id_sales" class="form-label">Nama Sales</label>
            <select class="form-control select2" style="width: 100%;" name="id_sales" id="id_sales">
                <option disabled value>Pilih ID Sales</option>
                @foreach ($sales_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sales }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
            <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="Masukkan Gaji Pokok">
        </div>
        <div class="mb-3">
            <label for="potongan_gaji" class="form-label">Potongan Gaji</label>
            <input type="text" class="form-control" id="potongan_gaji" name="potongan_gaji"
                placeholder="Masukkan Potongan Gaji">
        </div>
        <div class="mb-3">
            <label for="bonus" class="form-label">Bonus</label>
            <input type="text" class="form-control" id="bonus" name="bonus" placeholder="Masukkan Bonus">
        </div>
        <div class="mb-3">
            <label for="total_gaji" class="form-label">Total Gaji</label>
            <input type="text" class="form-control" id="total_gaji" name="total_gaji" placeholder="Masukkan Total Gaji">
        </div>
        <div class="mb-3">
            <label for="tgl_gajian" class="form-label">Tanggal Gajian</label>
            <input type="date" class="form-control" id="tgl_gajian" name="tgl_gajian"
                placeholder="Masukkan Tanggal Gajian">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('gaji.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
