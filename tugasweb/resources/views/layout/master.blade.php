<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>@yield('title','Sistem Informasi Mahasiswa')</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @yield('menuHome')" href="/home">
                    Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuProfile')" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuProduct')" href="/product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuContact')" href="/contact">Contact</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </div>
</nav>
@section('content')
    <div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
@show
<footer class="bg-dark py-4 text-white mt-4">
    <div class="container">
        Sistem Informasi Mahasiswa | Copyright &copy {{ date("Y") }} Teknik Informatika
    </div>
</footer>
</body>
</html>