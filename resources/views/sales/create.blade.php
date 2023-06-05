@extends('layouts.home')
@section('sub-title', 'Tambah Data Sales')
@section('content')
    <form action="{{ route('sales.store') }}" method="POST" class="">
        @csrf
        <div class="mb-3">
            <label for="nama_sales" class="form-label">Nama Sales</label>
            <input type="text" class="form-control" id="nama_sales" name="nama_sales" placeholder="Masukan Nama Sales">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Masukan Password">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('sales.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
