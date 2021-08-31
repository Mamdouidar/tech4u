@props(['product'])
<ul class="col list-group mx-2">
    <li class="list-group-item list-group-item-action bg-dark text-white">
        <strong>{{ $product['item']['name'] }}</strong>
        <br>
        <span class="label label-success">${{ $product['price']}}</span>
        <br>
        <span class="badge">Quantity: {{ $product['qty'] }}</span>
    </li>
</ul>