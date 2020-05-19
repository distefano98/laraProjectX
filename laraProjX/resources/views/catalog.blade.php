@extends('layout.page')

@section('title','Catalogo')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style_catalogo.css') }}" >
<style>
    .cover {height: auto;}
</style> 
@endsection

@section('content')


            <div class="cover_menu">
                <ul class="cover_menu_item">
                     <li> <a href=""> SMARTPHONE </a>
                         <ul>
                             <li > APPLE </li>
                             <li > ANDROID </li>
                                 
                         </ul>
                     </li>
                     <li > <a href=""> LAPTOP </a>
                         <ul >
                             <li >MACOS</li>
                             <li>WINDOWS</li>
                             <li>CHROMEBOOK</li>
                                 
                         </ul>
                             
                     </li>
                     <li > <a href=""> TABLET </a>
                         <ul >
                             <li> APPLE </li>
                             <li> ANDROID </li>
                                 
                         </ul>
                             
                     </li>
                </ul>
            </div>


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
