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
            <a class="navbar-brand fs-5 fw-bold">Kelola Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Kembali</a>
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
    MyFOOD - Tambah Data
    @endsection
    <div class="container mt-5">
        <h1 class="text-center mb-5">Tambah Makanan</h1>
        <div class="d-grid gap-2 col-2 mx-auto">
        </div>
        <div class="card" style="background-color: #C7F2A4;">
            <div class="card-body">
                <form action="{{url('/makanan/store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Makanan</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" style="background-color: #FCFFB2" id="nama" name="nama" placeholder="Masukkan Nama" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rasa/Varian</label>
                        <input type="text" class="form-control @error('rasa') is-invalid @enderror" style="background-color: #FCFFB2" id="rasa" name="rasa" placeholder="Masukkan Rasa" required>
                        @error('rasa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control @error('harga')is-invalid @enderror" style="background-color: #FCFFB2" id="harga" name="harga" placeholder="Masukkan Harga Rp." required>
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penjual</label>
                        <select id="penjual_id" name="penjual_id" style="background-color: #FCFFB2" class="form-select @error('penjual_id')
                            is-invalid
                            @enderror">
                            <option value="" selected>Pilih</option>
                            @foreach ($penjuals as $penjual)
                                <option value={{ $penjual->id}}>{{ $penjual->nama}}</option>
                            @endforeach
                        </select>
                        @error('penjual_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success me-2">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>
