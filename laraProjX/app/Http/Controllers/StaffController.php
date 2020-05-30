<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\Resources\Product;
use App\Models\Catalogo;
use App\Http\Requests\NewProductRequest;

class StaffController extends Controller
{
     protected $_staffModel;
     protected $__catalogoModel;
     
     public function __construct() {
        $this->middleware('can:isStaff');
        $this->_staffModel = new Staff;
        $this->__catalogoModel = new Catalogo;
        
     }
    
    /* metodo che mostra homepage 
     * degli account staff 
     * 
    */
    public function index() {
        return view('staff');
    }
    
    
    
    /* metodo che visualizza la form 
     * per l'inserimento di un nuovo
     * prodotto
     *
    */
     public function addProduct() {
        $prodCats = $this->_staffModel->getProdsCats()->pluck('nome', 'catId');
        return view('product.insert')
                        ->with('cats', $prodCats);
    }
   /* metodo attivato al submit
    * della form di inserimento
    *
   */
    public function storeProduct(NewProductRequest $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $product = new Product;
        $product->fill($request->validated());
        $product->image = $imageName;
        $product->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        }
        
        //return redirect()->action('StaffController@index');
        return response()->json(['redirect' => route('staff')]);
    }
    
    
    
    /* metodo che visualizza la form 
     * per la modifica di un prodotto
     *
    */
    public function changeProduct($prodId) {
        $prodCats = $this->_staffModel->getProdsCats()->pluck('nome', 'catId');
        $product = $this->__catalogoModel->getProdById([$prodId]);
        return view ('product.update')
                ->with('product', $product)
                ->with('cats', $prodCats);
    }
    
    
    /* metodo attivato al submit
    * della form di inserimento
    *
   */
    public function updateProduct(NewProductRequest $request, $prodId) {
        
        $product = Product::findOrFail($prodId);      //cerca e trova il prodotto con il codice prodotto corrispondente (altrimenti presenta errore)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        
        $product->fill($request->validated());
        $product->image = $imageName;
        $product->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };
        
        
        
        //return redirect()->action('StaffController@index');
        return response()->json(['redirect' => route('staff')]);
    }
    
    /* metodo che cancella un prodotto
     *
    */
     public function deleteProduct($prodId) {
        
        $product = Product::findOrFail($prodId);
        $product->delete();
        
        return response()->json(['redirect' => route('catalog')]);
    }

}
