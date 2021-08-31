@props(['product'])
<div class="col">
    <div class="card my-2 text-white bg-dark" style="width: 18rem;">
        <img class="card-img-top" src="{{ $product->src }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $product->name }}</h5>
            <p class="card-text text-center">{{ $product->description }}</p>
        </div>
        <ul class="list-group list-group-flush align-self-center">
            <li class="list-group-item bg-dark text-white">Price: ${{ $product->price }}</li>
            <li class="list-group-item bg-dark text-white">Category: {{ $product->category->name }}</li>
            <li class="list-group-item bg-dark text-white">Amount: {{ $product->amount }}</li>
        </ul>
        <div class="card-body align-self-center">
            <a href="#" class="card-link btn btn-outline-light">Add to Cart</a>
        </div>
    </div>
</div>
