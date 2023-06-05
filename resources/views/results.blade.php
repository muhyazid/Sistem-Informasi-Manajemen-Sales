@extends('layouts.home')
@section('sub-title', 'Selamat Datang Admin')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Hasil Pencarian</h4>
            </div>
            <div class="card-body">
                <p>Anda mencari: {{ $searchQuery }}</p>

                <ul>
                    @foreach ($results as $result)
                        <li>{{ $result->customer_name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
