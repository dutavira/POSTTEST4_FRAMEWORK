<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-
    icons@1.9.1/font/bootstrap-icons.css">

    <title>@yield('title')</title>
</head>

<body style="background-color: #E1FFB1;">
    <!-- JavaScript Bundle with Popper -->
    <nav class="navbar navbar-expand-lg " style="background-color: #B6E388;">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 fw-bold">MyFOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand fs-7 fw-bold">Kelola Admin</a>
                <ul class="d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="/menu/create_mk">Tambah Makanan</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu/create_mn">Tambah Minuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Auth::user() ? '/logout': '/login'}}"
                            aria-current="page">{{ Auth::user() ? 'Logout' :'Login'}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @section('title')
    MyFOOD - Food Delivery
    @endsection
    <div class="container px-4 py-5">
        @if (session('success'))
            <div class="alert alert-success">
                </b> {{ session('success') }}
            </div>
        @endif
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            @foreach ($makanans as $makanan)
                <div class="card" style="width: 18rem; margin:10px; background-color: #C7F2A4;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $makanan->nama}}</h5>
                        <p class="card-text">Makanan</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #FCFFB2">Rasa/Varian : {{$makanan->rasa}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Harga : Rp.{{$makanan->harga}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Penjual : {{$makanan->penjual->nama}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/makanan/show/{{ $makanan->id }}" class="btn btn-outline-success me-2">Detail</a>
                    </div>
                </div>
            @endforeach
            @foreach ($minumen as $minuman)
                <div class="card" style="width: 18rem; margin:10px; background-color: #C7F2A4;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $minuman->nama}}</h5>
                        <p class="card-text">Minuman</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #FCFFB2" >Rasa/Varian : {{$minuman->rasa}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2" >Harga : Rp.{{$minuman->harga}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2" >Penjual : {{$minuman->penjual->nama}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/minuman/show/{{ $minuman->id }}" class="btn btn-outline-success me-2">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>
