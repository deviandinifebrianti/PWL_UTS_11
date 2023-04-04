@extends('mahasiswas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2"> <br>
            <center><h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2></center> 
        </div> <br><br>

        <nav method="get" action="{{ route('databarangs.index') }}" class="navbar navbar-light bg-light justify-content-between">
            <form class="form-inline">
                <input type="search" class="form-control mr-sm-2" name="search" aria-label="Cari" value="{{request('search')}}" id="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
            <a class="btn btn-success" href="{{ route('databarangs.create') }}"> Input Data Barang</a>
        </nav>

    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>kode_barang</th>
        <th>nama_barang</th>
        <th>kategori_barang</th>
        <th>harga</th>
        <th>qty</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($databarags as $DataBarang)
    <tr>
        <td>{{ $DataBarang->kode_barang }}</td>
        <td>{{ $DataBarang->nama_barang }}</td>
        <td>{{ $DataBarang->kategori_barang }}</td>
        <td>{{ $DataBarang->harga }}</td>
        <td>{{ $DataBarang->qty }}</td>
        <td>
            <form action="{{ route('databarangs.destroy',$DataBarang->kode_barang) }}" method="POST">
                <a class="btn btn-info" href="{{ route('databarangs.show',$DataBarang->kode_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('databarangs.edit',$DataBarang->kode_barang) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $mahasiswas->links() }}
@endsection
