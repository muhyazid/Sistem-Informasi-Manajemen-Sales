@extends('layouts.home')
@section('sub-title', 'Tambah Data Jenis Ijin')
@section('content')
    <form action="{{ route('ijin.store') }}" method="POST" class="">
        @csrf
        <div class="mb-3">
            <label for="jenis_ijin" class="form-label">Jenis Ijin</label>
            <input type="text" class="form-control" id="jenis_ijin" name="jenis_ijin" placeholder="Masukan Jenis Ijin">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Ijin</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('ijin.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
