@extends('layout.publicPage')

@section('title', $product->nome )

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style_catalogo.css') }}" >

<style>
    
     .cover {height: auto}
     .bottoni{text-align: center; font-size: xx-large}
     
</style> 
@endsection

@section('content')

 <div class="prod">
        
     
        <div class="imgProd2">
            @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $product->image]) 
        </div>
            <div class="priceProd2">
           @include('helpers/productPrice')
        </div>
        <div class="infoProd">
             
            <h1 class="title">  {{ $product->nome }} </h1> 
            <h2 class="title">  Specifiche </h1> 
            
                        <p class="meta"> Marca: {{ $product->marca }}</p>
                        <p class="meta"> Processore: {{ $product->processore }}</p>
                        <p class="meta"> Dimensioni Display: {{ $product->dimDisplay }}</p>
                        <p class="meta"> Risoluzione Display: {{ $product->risDisplay }}</p>
                        <p class="meta"> Ram: {{ $product->ram }}</p>
                        <p class="meta"> Memoria: {{ $product->memoria }}</p>
                        <p class="meta"> Scheda Grafica: {{ $product->schedaGraf }}</p>
                        <p class="meta"> Fotocamera: {{ $product->fotocamera }}</p>
                        
                        
                        
        </div>
         
       
        <div class="textProd">
             <h2>  Descrizione </h2>      
                    <p> {!! $product->descLong !!}</p>
        </div>
        
     
     <div class="bottoni">
         @include('helpers/productEdit')
     </div>
     
 </div>         

@endsection



