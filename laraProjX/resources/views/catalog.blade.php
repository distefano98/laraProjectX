@extends('layout.publicPage')

@section('title','Catalogo')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style_catalogo.css') }}" >
<style>
    .cover {height: auto;}
    .content_search{ overflow: hidden}
    .searchbar{width: 318px;float: right}
    .form-text{padding: 6px;margin-top: 8px;font-size: 17px;border: none; background-color: #F1F1F1; border-radius: 5px;}
    .pulsante{ float: right;padding: 6px 10px;margin-top: 8px;margin-right: 16px;background: #F1F1F1;font-size: 17px;border: none;cursor: pointer; border-radius: 5px;}
    .bottoni{float: right;font-size: xx-large;}
</style> 

@endsection

@section('content')



@can('isStaff')
<div> <h2 style="text-align: center;font-style: italic;color: red;text-decoration: underline">Per Modificare o cancellare un prodotto utilizza i pulsanti di modifica e cancella sui singoli prodotti </h2> </div>
@endcan    
     <div class="categorie">
        <ul class="categorie_item">
                 
            @foreach ($macroCategories as $category)
              <li>
               <a href="{{  route('catalogMacro', [$category->catId])  }}">{{ $category->nome }}</a>
              </li>
                     @endforeach
         </ul>
                
            </div>

@isset($selectedMacroCateg)
     <div class="sottoCategorie">
        <ul class="sottoCategorie_item">
                 
            @foreach ($subCategories as $subCategory)
               <li>
               <a href="{{  route('catalogCateg', [$selectedMacroCateg->catId, $subCategory->catId]) }}">{{ $subCategory->nome }}</a>
               </li>
              @endforeach
         </ul>
                
            </div>
@endisset()
    

 @isset($products)
 
 <div class="content_search">
  {{ Form::open(array('route' => 'search', 'class' => 'searchbar')) }}
  {{ Form::text('term', null, ['placeholder' => 'ES. fotocamera 12 MP','class'=>'form-text']) }}
  {{ Form::submit('CERCA',['class'=>'pulsante']) }}
  {{ Form::close() }}
</div>
 
    @foreach ($products as $product)
    <div class="prod">
        
        <div class="imgProd">
            @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $product->image]) 
        </div>
        <div class="priceProd">
           @include('helpers/productPrice')
        
        </div>
        <div class="infoProd">
            <h1 class="title"> <a id="titolo" href="{{ route('showproduct', [$product->prodId]) }}"style="text-decoration: none; color: #F75D59"> {{ $product->nome }}</a></h1>
            <h2> <a>Descrizione Breve</a></h2>
                        <p class="meta"> {{ $product->descShort }}</p>
        </div>
   @can('isStaff')         
       <div class="bottoni">
         @include('helpers/productEdit')
     </div>
   @endcan      
         
                
</div>    

    

@endforeach

    <!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $products])

  @endisset()
@endsection
