@extends('layouts.home')
@section('sub-title', 'Data Pengajuan Ijin')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('pengajuanijin.create') }}" class="btn btn-primary">Tambah Pengajuan Ijin</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sales</th>
                    <th scope="col">Jenis Ijin</th>
                    <th scope="col">Alasan Pengajuan</th>
                    <th scope="col">Tanggal Pengajuan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuanijin as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->RSales->nama_sales }}</td>
                        <td>{{ $item->RIjin->jenis_ijin }}</td>
                        <td>{{ $item->alasan_pengajuan }}</td>
                        <td>{{ $item->tgl_pengajuan }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a class="btn btn-warning" href="/pengajuanijin/edit/{{ $item->id }}"><i
                                    class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/pengajuanijin/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pengajuanijin->links() }}
    </div>
@endsection
