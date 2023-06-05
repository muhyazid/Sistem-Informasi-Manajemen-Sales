@extends('layouts.home')
@section('sub-title', 'Edit Pelatihan')
@section('content')
    <form action="/pelatihan/update/{{ $pelatihan->id }}" method="POST" class="">
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
        <div class="form-group">
            <label for="id_pendidikan" class="form-label">Pendidikan Terakhir</label>
            <select class="form-control select2" style="width: 100%;" name="id_pendidikan" id="id_pendidikan">
                <option disabled value>Pilih Pendidikan Terakhir</option>
                @foreach ($pendidikan_ as $item)
                    <option value="{{ $item->id }}">{{ $item->pendidikan_terakhir }}></option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_jenispelatihan" class="form-label">Jenis Pelatihan</label>
            <select class="form-control select2" style="width: 100%;" name="id_jenispelatihan" id="id_jenispelatihan">
                <option disabled value>Pilih Jenis Pelatihan</option>
                @foreach ($jenispelatihan_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pelatihan }}></option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="date" class="form-control" id="waktu" name="waktu" placeholder="Masukkan Waktu Pelatihan"
                value="{{ $pelatihan->waktu }}">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
    </form>
    </div>
@endsection
