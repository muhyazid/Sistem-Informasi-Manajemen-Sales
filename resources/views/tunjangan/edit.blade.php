@extends('layouts.home')
@section('sub-title', 'Data Tunjangan')
@section('content')
    <form action="/tunjangan/update/{{ $tunjangan->id }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_sales" class="form-label">Nama Sales</label>
            <select class="form-control select2" style="width: 100%;" name="id_sales" id="id_sales">
                <option disabled value>Pilih Sales</option>
                @foreach ($sales_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sales }}></option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tunjangan_kesehatan" class="form-label">Tunjangan Kesehatan</label>
            <input type="text" class="form-control" id="tunjangan_kesehatan" name="tunjangan_kesehatan"
                placeholder="Masukkan Tunjangan Kesehatan" value="{{ $tunjangan->tunjangan_kesehatan }}">
        </div>
        <div class="mb-3">
            <label for="tunjangan_transportasi" class="form-label">Tunjangan Transportasi</label>
            <input type="text" class="form-control" id="tunjangan_transportasi" name="tunjangan_transportasi"
                placeholder="Masukkan Tunjangan Transportasi" value="{{ $tunjangan->tunjangan_transportasi }}">
        </div>
        <div class="mb-3">
            <label for="tunjangan_makan" class="form-label">Tunjangan Makan</label>
            <input type="text" class="form-control" id="tunjangan_makan" name="tunjangan_makan"
                placeholder="Masukkan Tunjangan Makan" value="{{ $tunjangan->tunjangan_makan }}">
        </div>
        <div class="mb-3">
            <label for="total_tunjangan" class="form-label">Total Tunjangan</label>
            <input type="text" class="form-control" id="total_tunjangan" name="total_tunjangan"
                placeholder="Masukkan Total Tunjangan" value="{{ $tunjangan->total_tunjangan }}">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
    </form>
    </div>
@endsection
