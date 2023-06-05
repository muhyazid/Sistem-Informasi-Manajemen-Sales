@extends('layouts.home')
@section('sub-title', 'Tambah Data Pendidikan')
@section('content')
    <form action="{{ route('pendidikan.store') }}" method="POST" class="">
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
            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir"
                placeholder="Masukan Pendidikan Terakhir">
        </div>
        <div class="mb-3">
            <label for="minat_pendidikan" class="form-label">Minat Pendidikan</label>
            <input type="text" class="form-control" id="minat_pendidikan" name="minat_pendidikan"
                placeholder="Masukan Minat Pendidikan">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
