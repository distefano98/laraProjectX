<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    public function getMacroCategs() {
        return Categorie::where('parId', 0)->get();
    }

    public function getCategsByParId($MacroId) {
        return Categorie::whereIn('parId', $MacroId)->get();
    }

    // Estrae i prodotti della categoria $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByCateg($catId, $paged = 1, $order = null, $discounted = false) {

        $prods = Prodotti::whereIn('catId', $catId)
                ->orWhereHas('prodCat', function ($query) use ($catId) {
                        $query->whereIn('parId', $catId);
        });
        if ($discounted) {
            $prods = $prods->where('discounted', true);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('discountPerc', $order);
        }
        return $prods->paginate($paged);
    }

}
