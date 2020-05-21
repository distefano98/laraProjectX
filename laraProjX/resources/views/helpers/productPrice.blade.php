@can('mostra-sconto')

<p class="price">  {{ number_format($product->getPrice($product->sconto), 2, ',', '.') }} € </p>

@if ($product->sconto == 1)
<p class="discprice"> Prezzo non scontato <del>{{ number_format($product->getPrice(false), 2, ',', '.') }} €</del><br>
    Sconto {{ $product->scontoPerc }}%</p>
@endif
@else
    <p class="price"> {{ number_format($product->getPrice(false), 2, ',', '.') }} € </p>
@endcan