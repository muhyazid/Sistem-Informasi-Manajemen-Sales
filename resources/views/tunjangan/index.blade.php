@extends('layouts.home')
@section('sub-title', 'Data Tunjangan')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('tunjangan.create') }}" class="btn btn-primary">Tambah Tunjangan</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sales</th>
                    <th scope="col">Tunjangan Kesehatan</th>
                    <th scope="col">Tunjangan Transportasi</th>
                    <th scope="col">Tunjangan Makan</th>
                    <th scope="col">Total Tunjangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tunjangan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->RSales->nama_sales }}</td>
                        <td>{{ $item->tunjangan_kesehatan }}</td>
                        <td>{{ $item->tunjangan_transportasi }}</td>
                        <td>{{ $item->tunjangan_makan }}</td>
                        <td>{{ $item->total_tunjangan }}</td>
                        <td>
                            <a class="btn btn-warning" href="/tunjangan/edit/{{ $item->id }}"><i
                                    class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/tunjangan/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tunjangan->links() }}
    </div>
@endsection
