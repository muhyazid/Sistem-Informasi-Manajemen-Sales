@extends('layouts.home')
@section('sub-title', 'Tambah Data Absensi')
@section('content')
    <form action="{{ route('absensi.store') }}" method="POST" class="">
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
            <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="Masukan Tanggal Masuk">
        </div>
        <div class="mb-3">
            <label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
            <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar"
                placeholder="Masukan Tanggal Keluar">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('absensi.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
