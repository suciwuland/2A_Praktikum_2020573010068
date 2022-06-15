<body>
    @extends('layout.master')
    @section('title','Sistem Informasi Mahasiswa')
        @section('content')
        <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Sistem Informasi Mahasiswa</h1>
        @foreach($data as $val)
            <li class="list-group">{{ $val }}</li>
        @endforeach
    </div>
    @stop
</body>