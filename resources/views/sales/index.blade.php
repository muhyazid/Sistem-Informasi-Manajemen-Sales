@extends('layouts.home')
@section('sub-title', 'Data Sales')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-2">
            <a href="{{ route('sales.create') }}" class="btn btn-primary">Tambah Sales</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Sales</th>
                    <th scope="col">Nama Sales</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_sales }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a class="btn btn-warning" href="/sales/edit/{{ $item->id }}"><i
                                    class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="/sales/delete/{{ $item->id }}"
                                onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- links untuk paginate --}}
        {{ $sales->links() }}
    </div>
@endsection
