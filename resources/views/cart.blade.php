<x-layout>
    <x-navbar />
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            @if (session()->has('cart'))
                @foreach ($products as $product)
                    <x-orders-list :product="$product" />
                @endforeach
                <div class="bg-transparent border border-dark d-flex justify-content-center">
                    <strong>Total: {{ $totalPrice }}</strong>
                </div>
                <x-form />
            @else
                <div class="bg-transparent border border-dark d-flex justify-content-center">
                    <strong>NO ITEMS IN CART, PLEASE ADD SOME FIRST!</strong>
                </div>
            @endif 
        </div>
    </div>
</x-layout>