@extends('layouts.home')
@section('sub-title', 'Data Jenis Ijin')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('ijin.create') }}" class="btn btn-primary ">Tambah Jenis Ijin</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Jenis Ijin</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ijin as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->jenis_ijin }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <a class="btn btn-warning" href="/ijin/edit/{{ $item->id }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/ijin/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $ijin->links() }}
    </div>
@endsection
