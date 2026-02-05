<div class="col-3">
    <div class="card shadow-sm">
    <img src="{{ asset('images/' . $image) }}" class="card-img-top p-3" />
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="text-success fw-semibold">{{ $price }} MAD</p>
        <a href="{{ route('products.show', $id ) }}" class="stretched-link btn btn-primary m-auto">Voir</a>
    </div>
</div>
</div>