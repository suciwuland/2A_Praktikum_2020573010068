{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Data Mahasiswa</title>
</head> --}}
<body>
    @extends('layout.master')
    @section('title','Data Mahasiswa')
    @section('menuMahasiswa','active')
        @section('content')
       <div class="container text-center    mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Mahasiswa</h1>
            <div class="row">
                <div class="col-sm-8 col-md-6 m-auto">
                    <ol class="list-group">
                        @forelse ($mahasiswa as $val)
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
    @stop
    
</body>
</html>