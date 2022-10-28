<nav class="navbar navbar-expand-lg " style="background-color: #B6E388;">
    <div class="container-fluid">
        <a class="navbar-brand fs-2 fw-bold">MyFOOD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Makanan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Minuman</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Keranjang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Auth::user() ? '/logout': '/login'}}"
                    aria-current="page">{{ Auth::user() ? 'Logout' :'Login'}}
                </a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Ingin Apa?" aria-label="Cari" style="background-color: #FCFFB2">
            <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
        </div>
    </div>
</nav>