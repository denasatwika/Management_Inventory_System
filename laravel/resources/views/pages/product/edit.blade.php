@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1> Ubah Produk </h1>
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
            {{-- @if ($errors->any())
                @dd($errors->all())
                
            @endif --}}
            <form action="/product/{{ $product->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-grup">
                            <label for="name" class="form-label"> Nama Produk </label>
                            <input type="text" name ="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}">
                            @error('name') 
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-grup">
                            <label for="description" class="form-label"> Deskripsi </label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"> {{ old('description', $product->description) }} </textarea>
                        </div>
                        <div class="form-grup">
                            <label for="sku" class="form-label"> Kode Produk </label>
                            <input type="text" name ="sku" id="sku" class="form-control @error('sku') is-invalid @enderror" value="{{ old('sku', $product->sku) }}" readonly>
                            @error('sku') 
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-grup">
                            <label for="stock" class="form-label"> Stock </label>
                            <input type="number" name ="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}">
                            @error('stock') 
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-grup">
                            <label for="category_id" class="form-label"> Kategori </label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" value="{{ old('category_id') }}">
                            @error('category') 
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                                @foreach ($categories as $category)
                                 <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : ''}}> {{ $category->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-grup">
                            <label for="status_id" class="form-label"> Status </label>
                            <select name="status_id" id="status_id" class="form-control  @error('status_id') is-invalid @enderror" value="{{ old('status_id') }}">
                            @error('status') 
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                                @foreach ($statuses as $status)
                                 <option value="{{ $status->id }}" {{ $product->status_id == $status->id ? 'selected' : ''}} > {{ $status->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        </select>
                    </div>
                </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="/product" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                            <button type="submit" class="btn btn-sm btn-warning"> Ubah </button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection