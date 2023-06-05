@extends('layouts.home')
@section('sub-title', 'Tambah Data Pelatihan')
@section('content')
    <form action="{{ route('pelatihan.store') }}" method="POST" class="">
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
            <label for="id_pendidikan" class="form-label">Pendidikan Terakhir</label>
            <select class="form-control select2" style="width: 100%;" name="id_pendidikan" id="id_pendidikan">
                <option disabled value>Pilih Pendidikan Terakhir</option>
                @foreach ($pendidikan_ as $item)
                    <option value="{{ $item->id }}">{{ $item->pendidikan_terakhir }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_jenispelatihan" class="form-label">Nama Pelatihan</label>
            <select class="form-control select2" style="width: 100%;" name="id_jenispelatihan" id="id_jenispelatihan">
                <option disabled value>Pilih Jenis Pelatihan</option>
                @foreach ($jenispelatihan_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pelatihan }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="date" class="form-control" id="waktu" name="waktu" placeholder="Masukan Waktu Pelatihan">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <a href="{{ route('pelatihan.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
    </div>
@endsection
