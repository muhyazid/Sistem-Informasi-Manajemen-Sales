@extends('layouts.home')
@section('sub-title', 'Data Pelatihan')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('pelatihan.create') }}" class="btn btn-primary">Data Pelatihan</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sales</th>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Nama Pelatihan</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelatihan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->RSales->nama_sales }}</td>
                        <td>{{ $item->RPendidikan->pendidikan_terakhir }}</td>
                        <td>{{ $item->RJenispelatihan->nama_pelatihan }}</td>
                        <td>{{ $item->waktu }}</td>
                        <td>
                            <a class="btn btn-warning" href="/pelatihan/edit/{{ $item->id }}"><i
                                    class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/pelatihan/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pelatihan->links() }}
    </div>
@endsection
