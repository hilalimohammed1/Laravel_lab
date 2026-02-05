@extends('layouts.master')
@section('title', 'Products')

@section('content')

<div class="d-flex justify-content-between">
    <h3>Product n° {{ $product['id'] }}</h3>
</div>
<div class="card text-center w-50 shadow-sm">
    <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top p-3"
         style="height: 180px; object-fit: contain" />

    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $product['title'] }}</h5>
        <p class="text-success fw-semibold">{{ $product['price'] }} MAD</p>
        <p>{{ $product['description'] }}</p>
    </div>
    
</div>
    <a href="{{ route('product.index') }}" class="btn btn-primary mt-3">Retour</a>
@endsection