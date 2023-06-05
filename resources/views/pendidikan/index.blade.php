@extends('layouts.home')
@section('sub-title', 'Pendidikan')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('pendidikan.create') }}" class="btn btn-primary">Tambah Pendidikan</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sales</th>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Minat Pendidikan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendidikan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->RSales->nama_sales }}</td>
                        <td>{{ $item->pendidikan_terakhir }}</td>
                        <td>{{ $item->minat_pendidikan }}</td>
                        <td>
                            <a class="btn btn-warning" href="/pendidikan/edit/{{ $item->id }}"><i
                                    class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/pendidikan/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pendidikan->links() }}
    </div>
@endsection
