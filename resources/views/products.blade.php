<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            @foreach ($products as $product)
                <<x-product-card :product="$product"/>
            @endforeach
        </div>
    </div>
</x-layout>