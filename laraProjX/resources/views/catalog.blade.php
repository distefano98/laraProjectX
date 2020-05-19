@extends('layout.page')

@section('title','Catalogo')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style_catalogo.css') }}" >
<style>
    .cover {height: auto;}
</style> 
@endsection

@section('content')

    
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
    @foreach ($products as $product)
    <div class="prod">
        <div class="prod_top">
        <div class="imgProd">
            @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $product->image]) 
        </div>
        <div class="infoProd">
                        <h1 class="title">Prodotto: {{ $product->nome }}</h1>
                        <p class="meta">Descrizione Breve: {{ $product->descShort }}</p>
        </div>
        </div>
       
        <div class="textProd">
                    <p>Descrizione Estesa: {!! $product->descLong !!}</p>
        </div>
         <div class="priceProd">
                        @include('helpers/productPrice')
        </div>
                
</div>    

    

@endforeach

    <!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $products])

  @endisset()
@endsection
