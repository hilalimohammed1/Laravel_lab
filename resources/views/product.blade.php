@extends('layouts.master')
@section('title', 'Products')

@section('content')

<div class="row">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h1>Our Products</h1>
        <a href="{{ route('product.add') }}" class="btn btn-primary">Ajouter</a>
    </div>
    @foreach($products as $product)
        <x-product-card :id="$product['id']" :title="$product['title']" :price="$product['price']"
        :image="$product['image']" :description="$product['description']" />

    @endforeach
</div>

@endsection