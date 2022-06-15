@extends('layout.master')
@section('title','Product')
@section('menuProduct','active')
    @section('content')
    <div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Halaman Product</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                Barang yang tersedia:
                <ol class="list-group">
                    @forelse ($product as $val)
                    <li class="list-group-item">{{ $val }}</li>
                    @empty
                    @endforelse
                </ol>
            </div>
        </div>
</div>
@endsection