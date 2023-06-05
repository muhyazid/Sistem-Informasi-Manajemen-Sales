@extends('layouts.home')
@section('sub-title', 'Data Absensi')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('absensi.create') }}" class="btn btn-primary">Ajukan Absensi</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sales</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absensi as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->RSales->nama_sales }}</td>
                        <td>{{ $item->tgl_masuk }}</td>
                        <td>{{ $item->tgl_keluar }}</td>
                        <td>
                            <a class="btn btn-warning" href="/absensi/edit/{{ $item->id }}"><i
                                    class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/absensi/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $absensi->links() }}
    </div>
@endsection
