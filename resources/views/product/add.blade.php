@extends('layouts.master')
@section('title', 'Ajouter des produits')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="m-3">Ajouter un produit</h3>
    </div>

    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="text" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <button class="btn btn-outline-primary w-100" type="submit">Ajouter</button>
            </div>

        </form>
    </div>
</div>
@endsection