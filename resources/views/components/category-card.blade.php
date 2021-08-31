@props(['category'])
<div class="col">
    <div class="card text-white bg-dark" style="width: 18rem;">
        <img class="card-img-top" src="{{ $category->src }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $category->name }}</h5>
            <p class="card-text text-center">{{ $category->description}}</p>
        </div>
        <div class="card-body align-self-center">
            <a href="/categories/{{$category->name}}" class="card-link btn btn-outline-light">Browse</a>
        </div>
    </div>
</div>