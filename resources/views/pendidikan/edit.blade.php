@extends('layouts.home')
@section('sub-title', 'Edit Data Pendidikan')
@section('content')
    <form action="/pendidikan/update/{{ $pendidikan->id }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_sales" class="form-label">Nama Sales</label>
            <select class="form-control select2" style="width: 100%;" name="id_sales" id="id_sales">
                <option disabled value>Pilih Kategori Sales</option>
                @foreach ($sales_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sales }}></option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir"
                placeholder="Masukkan Pendidikan Terakhir" value="{{ $pendidikan->pendidikan_terakhir }}">
        </div>
        <div class="mb-3">
            <label for="minat_pendidikan" class="form-label">Minat Pendidikan</label>
            <input type="text" class="form-control" id="minat_pendidikan" name="minat_pendidikan"
                placeholder="Masukkan Minat Pendidikan" value="{{ $pendidikan->alasan_pengajuan }}">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
    </form>
    </div>
@endsection
