@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1> Dashboard </h1>
        {{-- @dd(auth()->check()) --}}
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"> Beranda </a></li>
        </ol>
    </div>
</div>
@endsection

@section('content')

@endsection