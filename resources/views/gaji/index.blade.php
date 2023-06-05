@extends('layouts.home')
@section('sub-title', 'Data Gaji')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('gaji.create') }}" class="btn btn-primary">Tambah Gaji</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sales</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Potongan Gaji</th>
                    <th scope="col">Bonus</th>
                    <th scope="col">Total Gaji</th>
                    <th scope="col">Tanggal Gajian</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gaji as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->RSales->nama_sales }}</td>
                        <td>{{ $item->gaji_pokok }}</td>
                        <td>{{ $item->potongan_gaji }}</td>
                        <td>{{ $item->bonus }}</td>
                        <td>{{ $item->total_gaji }}</td>
                        <td>{{ $item->tgl_gajian }}</td>
                        <td>
                            <a class="btn btn-warning" href="/gaji/edit/{{ $item->id }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/gaji/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $gaji->links() }}
    </div>
@endsection
