<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Catalogo;


class PublicController extends Controller
{
    protected $__catalogoModel;
    
    public function __construct() {
        $this->__catalogoModel = new Catalogo;           //Viene associato un Modello del Catalogo all'elemento dichiarato
    }
    
    public function showCatalog() {                     //Mostra tutti i prodotti del catalogo

        //Macrocategorie
        $macroCategs = $this->__catalogoModel->getMacroCategs();
        
        //Prodotti di tutte le Macrocategorie
        $prods = $this->__catalogoModel->getProdsByCateg($macroCategs->map->only(['catId']), 5, false);

        return view('catalog')
                        ->with('macroCategories', $macroCategs)
                        ->with('products', $prods);
    }
    
    public function showMacroCategProds($macroCatId) {  //Mostra tutti i prodotti della Macrocategoria selezionata

        //Macrocategorie
        $macroCategs = $this->__catalogoModel->getMacroCategs();

        //Macrocategoria selezionata
        $selMacroCateg = $macroCategs->where('catId', $macroCatId)->first();

        // Sottocategorie
        $subCategs = $this->__catalogoModel->getCategsByParId([$macroCatId]);
                        
        //Prodotti in sconto della Macrocategoria selezionata
        $prods = $this->__catalogoModel->getProdsByCateg([$macroCatId], 5, false);

        return view('catalog')
                        ->with('macroCategories', $macroCategs)
                        ->with('selectedMacroCateg', $selMacroCateg)
                        ->with('subCategories', $subCategs)
                        ->with('products', $prods);
    }
    
    public function showCategProds($macroCatId, $catId) {       //Mostra tutti i prodotti della sottocategoria selezionata

        //Macrocategorie
        $macroCategs = $this->__catalogoModel->getMacroCategs();

        //Macrocategoria selezionata
        $selMacroCateg = $macroCategs->where('catId', $macroCatId)->first();

        // Sottocategorie
        $subCategs = $this->__catalogoModel->getCategsByParId([$macroCatId]);

        // Prodotti della sottocategoria selezionata
        $prods = $this->__catalogoModel->getProdsByCateg([$catId], 5, false);

        return view('catalog')
                        ->with('macroCategories', $macroCategs)
                        ->with('selectedMacroCateg', $selMacroCateg)
                        ->with('subCategories', $subCategs)
                        ->with('products', $prods);
    }
    
     public function showProduct($prodId){
        $product = $this->__catalogoModel->getProdById([$prodId]);
        return view('product.schedaProdotto')
            ->with('product', $product);
    }
    
    
    public function search(Request $request,$macroCatId,$catId) {
       //Categorie
        $macroCategs = $this->__catalogoModel->getMacroCategs();
        
        //categoria selezionata
        $selMacroCateg = $macroCategs->where('catId', $macroCatId)->first();
        
        //Sottocategorie
         $subCategs = $this->__catalogoModel->getCategsByParId([$macroCatId]);
	
        //Sottocategoria selezionata
        $selSubCat=$subCategs->where('catId',$catId)->first();
        
        Log::info($request);
	$term = $request->validate([
        'term' => ['required', 'max:30'],
        ]);
        Log::info($term);
       
        
        $prods = $this->__catalogoModel->getProdsByTerm([$term, $catId ,3]);
	Log::info($prods);

        return view('catalog')
                        ->with('macroCategories', $macroCategs)
                        ->with('selectedMacroCateg', $selMacroCateg)
                        ->with('subCategories',  $subCategs)
                        ->with('selectedSubCat', $selSubCate) 
                        ->with('products', $prods);
    }
    
    
    
}