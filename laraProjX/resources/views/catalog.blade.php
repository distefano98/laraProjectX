@extends('layout.page')
@section('title','Catalog')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style_catalogo.css') }}" >
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
<div class="prodotto">
    <div class="logoProdotto">
    
    </div>
    <div class="prezzoProdotto">
    
    </div>
    <div class="infoProdotto">
    
    </div>
    
</div>            
@endsection