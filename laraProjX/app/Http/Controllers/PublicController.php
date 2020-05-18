<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;

class PublicController extends Controller
{
    protected $_catalogoModel;
    
    public function constructCatalogo() {
        $this->_catalogoModel = new Catalogo;           //Viene associato un Modello del Catalogo all'elemento dichiarato
    }
    
    public function showCatalog() {                     //Mostra tutti i prodotti del catalogo

        //Macrocategorie
        $macroCategs = $this->_catalogoModel->getMacroCategs();
        
        //Prodotti di tutte le Macrocategorie
        $prods = $this->_catalogoModel->getProdsByCateg($macroCategs->map->only(['catId']), 3, false);

        return view('catalog')
                        ->with('macroCategories', $macroCategs)
                        ->with('products', $prods);
    }
    
    public function showMacroCategProds($macroCatId) {  //Mostra tutti i prodotti della Macrocategoria selezionata

        //Macrocategorie
        $macroCategs = $this->_catalogoModel->getMacroCategs();

        //Macrocategoria selezionata
        $selMacroCateg = $macroCategs->where('catId', $macroCatId)->first();

        // Sottocategorie
        $subCategs = $this->_catalogoModel->getCategsByParId([$macroCatId]);
                        
        //Prodotti in sconto della Macrocategoria selezionata
        $prods = $this->_catalogoModel->getProdsByCat([$macroCatId], 2, false);

        return view('catalog')
                        ->with('macroCategories', $macroCategs)
                        ->with('selectedMacroCateg', $selMacroCateg)
                        ->with('subCategories', $subCategs)
                        ->with('products', $prods);
    }
    
    public function showCategProds($macroCatId, $catId) {       //Mostra tutti i prodotti della sottocategoria selezionata

        //Macrocategorie
        $macroCategs = $this->_catalogoModel->getMacroCategs();

        //Macrocategoria selezionata
        $selMacroCateg = $macroCategs->where('catId', $macroCatId)->first();

        // Sottocategorie
        $subCategs = $this->_catalogoModel->getCategsByParId([$macroCatId]);

        // Prodotti della sottocategoria selezionata
        $prods = $this->_catalogoModel->getProdsByCat([$catId]);

        return view('catalog')
                        ->with('macroCategories', $macroCategs)
                        ->with('selectedMacroCateg', $selMacroCateg)
                        ->with('subCategories', $subCategs)
                        ->with('products', $prods);
    }
    
}
