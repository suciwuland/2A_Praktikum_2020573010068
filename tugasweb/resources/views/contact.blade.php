@extends('layout.master')
@section('title','Contact')
@section('menuContact','active')
    @section('content')
    <div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Halaman Contact</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                Contact:
                <ol class="list-group">
                    @forelse ($contact as $val)
                    <li class="list-group-item">{{ $val }}</li>
                    @empty
                    @endforelse
                </ol>
            </div>
        </div>
</div>
@endsection