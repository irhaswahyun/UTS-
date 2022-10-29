@extends('layout.main')
@section('container')

<div class="row mt-5">
<div class="col mt-5">
<div class="card" style="width: 18rem;">
  <img src="/image/{{ $barang->foto }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
    <p class="card-text">{{ $barang->deskripsi }}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $barang->harga }}</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">BELI PRODUK</a>
  </div>
</div>
</div>
</div>


@endsection

