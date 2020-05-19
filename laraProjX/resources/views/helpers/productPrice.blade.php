<p class="price"> {{ number_format($product->getPrice($product->sconto), 2, ',', '.') }} € </p>

@if ($product->discounted == 1)
<p class="discprice"> Valore <del>{{ number_format($product->getPrice(false), 2, ',', '.') }} €</del><br>
    Sconto {{ $product->scontoPerc }}%</p>
@endif