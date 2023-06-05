@extends('layouts.home')
@section('sub-title', 'Data Sales')
@section('content')
    <form action="/sales/update/{{ $sales->id }}" method="POST" class="">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_sales" class="form-label">Nama Sales</label>
            <input type="text" class="form-control" id="nama_sales" name="nama_sales" placeholder="Masukkan Nama Sales"
                value="{{ $sales->nama_sales }}">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username"
                value="{{ $sales->username }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password"
                value="{{ $sales->password }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email"
                value="{{ $sales->email }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"
                value="{{ $sales->alamat }}">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
    </form>
    </div>
@endsection
