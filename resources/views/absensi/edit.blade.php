@extends('layouts.home')
@section('sub-title', 'Data Absensi')
@section('content')
    <form action="/absensi/update/{{ $absensi->id }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_sales" class="form-label">ID Sales</label>
            <select class="form-control select2" style="width: 100%;" name="id_sales" id="id_sales">
                <option disabled value>Pilih Sales</option>
                @foreach ($sales_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sales }}></option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="Masukkan Tanggal Masuk"
                value="{{ $absensi->tgl_masuk }}">
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Tanggal Keluar</label>
            <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar"
                placeholder="Masukkan Tanggal Keluar" value="{{ $absensi->tgl_keluar }}">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
    </form>
@endsection
