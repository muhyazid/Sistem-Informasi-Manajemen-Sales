@extends('layouts.home')
@section('sub-title', 'Tambah Data Tunjangan')
@section('content')
    <form action="{{ route('tunjangan.store') }}" method="POST" class="">
        @csrf
        <div class="form-group">
            <label for="id_sales" class="form-label">Nama Sales</label>
            <select class="form-control select2" style="width: 100%;" name="id_sales" id="id_sales">
                <option disabled value>Pilih Nama Sales</option>
                @foreach ($sales_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sales }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tunjangan_kesehatan" class="form-label">Tunjangan Kesehatan</label>
            <input type="text" class="form-control" id="tunjangan_kesehatan" name="tunjangan_kesehatan"
                placeholder="Masukkan Tunjangan Kesehatan">
        </div>
        <div class="mb-3">
            <label for="tunjangan_transportasi" class="form-label">Tunjangan Transportasi</label>
            <input type="text" class="form-control" id="tunjangan_transportasi" name="tunjangan_transportasi"
                placeholder="Masukkan Tunjangan Transportasi">
        </div>
        <div class="mb-3">
            <label for="tunjangan_makan" class="form-label">Tunjangan Makan</label>
            <input type="text" class="form-control" id="tunjangan_makan" name="tunjangan_makan"
                placeholder="Masukkan Tunjangan Makan">
        </div>
        <div class="mb-3">
            <label for="total_tunjangan" class="form-label">Total Tunjangan</label>
            <input type="text" class="form-control" id="total_tunjangan" name="total_tunjangan"
                placeholder="Masukkan Total Tunjangan">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('tunjangan.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
