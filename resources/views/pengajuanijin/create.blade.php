@extends('layouts.home')
@section('sub-title', 'Tambah Data Pengajuan Ijin')
@section('content')
    <form action="{{ route('pengajuanijin.store') }}" method="POST" class="">
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
        <div class="form-group">
            <label for="id_jenisijin" class="form-label">Jenis Ijin</label>
            <select class="form-control select2" style="width: 100%;" name="id_jenisijin" id="id_jenisijin">
                <option disabled value>Pilih Jenis Ijin</option>
                @foreach ($ijin_ as $item)
                    <option value="{{ $item->id }}">{{ $item->jenis_ijin }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="alasan_pengajuan" class="form-label">Alasan Pengajuan</label>
            <input type="text" class="form-control" id="alasan_pengajuan" name="alasan_pengajuan"
                placeholder="Masukan Alasan Pengajuan">
        </div>
        <div class="mb-3">
            <label for="tgl_pengajuan" class="form-label">Tanggal Pengajuan</label>
            <input type="date" class="form-control" id="tgl_pengajuan" name="tgl_pengajuan"
                placeholder="Masukan Alasan Pengajuan">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Masukan Status">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('pengajuanijin.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
