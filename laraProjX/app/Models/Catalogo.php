<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Category;
use App\Models\Resources\Product;

class Catalogo extends Model
{
    public function getMacroCategs() {
        return Category::where('parId', 0)->get();
    }

    public function getCategsByParId($macroId) {
        return Category::whereIn('parId', $macroId)->get();
    }

    // Estrae i prodotti della categoria $catId, eventualmente ordinati
    public function getProdsByCateg($catId, $paged = 1, $discounted = false) {

        $prods = Product::whereIn('catId', $catId)                             //Prodotti della sottocategoria specificata
                ->orWhereHas('prodCat', function ($query) use ($catId) {
                        $query->whereIn('parId', $catId);                       //Prodotti della sottocategoria figlia di quella speicificata
        });
        
        if ($discounted) {
            $prods = $prods->where('sconto', true);
        }
        
        return $prods->paginate($paged);
    }

    public function getProdById($prodId) {
        return Product::whereIn('prodId', $prodId)->get()->first();
    }
    
    public function getProdsByTerm($term,$catId,$paged) {

        $prods = Product::wherein('catId',$catId)
                ->where('descLong', 'LIKE', "%$term[0]%");
        return $prods->paginate($paged);
    }
}
