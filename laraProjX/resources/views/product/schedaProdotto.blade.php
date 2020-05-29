@extends('layout.publicPage')

@section('title', $product->nome )

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style_catalogo.css') }}" >

<style>
    
     .cover {height: auto}
     
</style> 
@endsection

@section('content')

 <div class="prod">
        <div class="prod_top">
        <div class="imgProd">
            @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $product->image]) 
        </div>
        <div class="infoProd">
            <h1 class="title">  {{ $product->nome }} </h1>
                        <p class="meta"> {{ $product->descShort }}</p>
        </div>
        </div>
       
        <div class="textProd">
                    <p> {!! $product->descLong !!}</p>
        </div>
         <div class="priceProd">
           @include('helpers/productPrice')
        </div>
     
     <div class="bottoni">
         @include('helpers/productEdit')
     </div>
     
 </div>         

@endsection
