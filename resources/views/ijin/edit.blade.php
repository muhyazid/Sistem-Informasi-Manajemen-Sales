@extends('layouts.home')
@section('sub-title', 'Edit Data Ijin')
@section('content')
    <form action="/ijin/update/{{ $ijin->id }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="jenis_ijin" class="form-label">Jenis Ijin</label>
            <input type="text" class="form-control" id="jenis_ijin" name="jenis_ijin" placeholder="Masukkan Jenis Ijin"
                value="{{ $ijin->jenis_ijin }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"
                value="{{ $ijin->deskripsi }}">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
    </form>
    </div>
@endsection
