{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Data Dosen</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gallery">Gallery</a>
            </li>
        </ul>
    </div>
</nav> --}}
{{-- @include('layout.header')
@include('layout.header',['title'=>'Data Dosen']) --}}
@extends('layout.master')
@section('title','Data Dosen')
@section('menuDosen','active')
    @section('content')
    <div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Dosen</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($dosen as $val)
                    <li class="list-group-item">{{ $val }}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">
                    Tidak ada data...
                    </div>
                    @endforelse
                </ol>
            </div>
        </div>
</div>
@endsection

{{-- @include('layout.footer') --}}
{{-- <footer class="bg-dark py-4 text-white mt-4">
    <div class="container">
        Sistem Informasi Mahasiswa | Copyright &copy {{ date("Y") }} Teknik Informatika
    </div>
</footer> --}}
</body>
</html>