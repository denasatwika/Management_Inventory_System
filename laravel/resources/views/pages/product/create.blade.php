@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1> Tambah Produk </h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"> Home </a></li>
            <li class="breadcrumb-item active"> Produk </li>
        </ol>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <form action="/product/store" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="form-grup">
                            <label for="name" class="form-label"> Nama Produk </label>
                            <input type="text" name ="name" id="name" class="form-control">
                        </div>
                        <div class="form-grup">
                            <label for="description" class="form-label"> Deskripsi </label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-grup">
                            <label for="sku" class="form-label"> Kode Produk </label>
                            <input type="text" name ="sku" id="sku" class="form-control">
                        </div>
                        <div class="form-grup">
                            <label for="stock" class="form-label"> Stock </label>
                            <input type="number" name ="stock" id="stock" class="form-control">
                        </div>
                        <div class="form-grup">
                            <label for="category_id" class="form-label"> Kategori </label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                 <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-grup">
                            <label for="status_id" class="form-label"> Status </label>
                            <select name="status_id" id="status_id" class="form-control">
                                @foreach ($statuses as $status)
                                 <option value="{{ $status->id }}"> {{ $status->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        </select>
                    </div>
                </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="/product" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection