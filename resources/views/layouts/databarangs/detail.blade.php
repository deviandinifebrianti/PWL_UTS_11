@extends('databarangs.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data Barang
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>kode_barang: </b>{{$DataBarang->kode_barang}}</li>
                    <li class="list-group-item"><b>nama_barang: </b>{{$DataBarang->nama_barang}}</li>
                    <li class="list-group-item"><b>kategori_barang: </b>{{$DataBarang->kategori_barang}}</li>
                    <li class="list-group-item"><b>harga: </b>{{$DataBarang->harga}}</li>
                    <li class="list-group-item"><b>qty: </b>{{$DataBarang->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('databarangs.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
