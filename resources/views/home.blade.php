@extends('layouts.global')
@section('title')
    MyFOOD - Food Delivery
@endsection
@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 fs-5">Halo {{ Auth::user()->name ?? "Fooders"}}</h2>
        <h2 class="pb-2 fs-4">Beberapa Makanan dan Minuman Kami</h2>
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
                        <a href="#" class="btn btn-outline-success me-2">Order</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Tambah Keranjang</a>
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
                        <a href="#" class="btn btn-outline-success me-2">Order</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Tambah Keranjang</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection