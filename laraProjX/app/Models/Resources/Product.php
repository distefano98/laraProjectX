<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'prodId';

    // prodId non modificabile da un HTTP Request
    protected $guarded = ['prodId'];
    public $timestamps = false;

    public function getPrice($withDiscount = false) {                   //Metodo per ricavare il prezzo
        $price = $this->price;
        if (true == ($this->discounted) && true == $withDiscount) {
            $discount = ($price * $this->discountPerc) / 100;
            $price = round($price - $discount, 2);                      //Restituisce il valore arrotondato di price a 2 cifre dopo la virgola
        }
        return $price;
    }

    // Relazione univoca con Category
    public function prodCat() {
        return $this->hasOne(Category::class, 'catId', 'catId');
    }
}
