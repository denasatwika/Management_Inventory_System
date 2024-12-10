@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1> Produk </h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"> Home </a></li>
            <li class="breadcrumb-item active"> Widgets </li>
        </ol>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="/product/create" class="btn btn-sm btn-primary">
                        Tambah Barang
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thread>
                            <tr> 
                                <th> No </th>
                                <th> Produk </th>
                                <th> Stok </th>
                                <th> Tgl Masuk </th> 
                                <th> Kode</th> 
                                <th> Kategori </th>
                                <th> Status </th>
                                <th> Metode </th>
                            </tr>
                        <body>
                            @foreach ($products as $product)
                            <tr> 
                                <td> {{ $loop-> iteration }} </td>
                                <td> {{ $product -> name }} </td>
                                <td> {{ $product -> stock }} </td>
                                <td> {{ $product -> created_at }} </td>
                                <td> {{ $product -> sku }} </td> 
                                <td> {{ $product -> category -> name }}</td>
                                <td> {{ $product -> status -> name }}</td> 
                                <td>
                                    <div class="d-flex">
                                        <a href="/product/edit/{{ $product->id }}" class="btn btn-sm btn-warning mr-2"> Ubah </a>
                                        <form action="/product/ {{ $product->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"> Hapus </button>
                                        </form>
                                    </div>
                                </td>
                                {{-- <td> {{ $product->status == 'available' ? 'Tersedia' : ($product->status == 'unavailable' ? 'Tidak Tersedia') }} </td> --}}
                            </tr>
                            @endforeach
                        </body>
                        </thread>
                    </table>
                </div>
            </div>
        </div>
    </div>

                                

@endsection