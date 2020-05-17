<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    public function getMacroCategs() {
        return Categorie::where('parId', 0)->get();
    }

    public function getCategsByParId($macroId) {
        return Categorie::whereIn('parId', $macroId)->get();
    }

    // Estrae i prodotti della categoria $catId, eventualmente ordinati
    public function getProdsByCateg($catId, $paged = 1, $discounted = false) {

        $prods = Prodotti::whereIn('catId', $catId)                             //Prodotti della sottocategoria specificata
                ->orWhereHas('prodCat', function ($query) use ($catId) {
                        $query->whereIn('parId', $catId);                       //Prodotti della sottocategoria figlia di quella speicificata
        });
        
        if ($discounted) {
            $prods = $prods->where('discounted', true);
        }
        
        return $prods->paginate($paged);
    }

}
