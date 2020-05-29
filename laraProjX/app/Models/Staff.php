<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;
use App\Models\Resources\Category;


class Staff {
    /*metodo per generare a livello di vista
     *elenco delle possibili categorie che possono essere associate
     * ad un certo prodotto, estraiamo tutte le categorie di prodotto 
     * con parId diverso da zero quindi escludiamo le macrocategorie
     *      */
    public function getProdsCats() {
        return Category::where('parId', '!=', 0)->get();
    }
    
}