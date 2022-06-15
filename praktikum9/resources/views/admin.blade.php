<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                {{-- <div class="alert alert-warning alert-dismissible fade show"> --}}
                    @component('layout.alert')
                    @slot('class')
                    warning
                    @endslot
                    @slot('judul')
                    Peringatan
                    @endslot
                    100 data mahasiswa perlu diperbaiki
                    @endcomponent
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> --}}
                </div>
                {{-- <div class="alert alert-danger alert-dismissible fade show"> --}}
                    @component('layout.alert')
                    @slot('class')
                    danger
                    @endslot
                    @slot('judul')
                    Awas
                    @endslot
                    Hari ini deadline laporan perjalan dinas!
                    @endcomponent
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> --}}
                </div>
                @component('layout.alert')
                @slot('class')
                success
                @endslot
                @slot('judul')
                Sukses
                @endslot
                Bulan depan cuti panjang...
                @endcomponent
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
