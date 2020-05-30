@can('isStaff')

<a href=" {{ route('changeproduct', [$product->prodId]) }} " name="Modifica Prodotto" ><input type="submit" value="Modifica Prodotto" name="modifica_prodotto" /></a>

<a href=" {{ route('deleteproduct', [$product->prodId]) }} " name="Cancella Prodotto" ><input type="submit" value="Cancella Prodotto" name="cancella_prodotto" /></a>

@endcan