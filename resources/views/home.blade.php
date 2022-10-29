@extends('layout.main')
@section('container')

<div class="row mt-5">
@foreach ($barang as $brg)
<div class="col mt-5">
<div class="card" style="width: 18rem;">
  <img src="/image/{{ $brg->foto }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $brg->nama_barang }}</h5>
    <a href="{{ route ('barang', $brg->id)}}" class="btn btn-primary">DETAIL BARANG</a>
  </div>
  </div>
</div>
@endforeach
</div> 

@endsection

