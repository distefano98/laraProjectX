@extends('layout.staffPage')

@section('title', 'Area Staff')
@section('head')
<style>
    .cover{height: auto;}
    .areaStaff{height: 800px;width: 70%;margin: auto}
    .areaStaff h2{text-align: center;font-family: Arial, Helvetica, sans-serif;color: #666666}
    .areaStaff p{text-align: center;}
    .opzione{width: 100%;height: 30%}
    .opzione ul{list-style: none;padding: 0;width: 100%;text-align: center;}
    .opzione ul li{display: inline-block;text-align: center ;width: 30%;  background-color: #F1F1F1; border-radius: 20px; padding: 10px;}
    .opzione ul li a{text-decoration: none;color: black}
</style>

@endsection
@section('content')
<div class="areaStaff">
    <h2>Area Staff</h2> 
    <p>Benvenuto <b> {{ Auth::user()->nome }} {{ Auth::user()->cognome }} </b> </p>
    <p>Scegli che azione effettuare</p>
    
   
   <div class="opzione">
        <ul>
            <li> <a href="{{ route('newproduct')}}" >  INSERISCI NUOVO PRODOTTO </a></li>
            <li> <a href="{{ route('catalog')}}" >  GESTIONE PRODOTTI </a> </li> 
            <li> <a href="{{ route('showcategory')}}">  GESTIONE CATEGORIE </a> </li>
        </ul>
    </div>
    

  @yield('funzioni')
</div>



@endsection


