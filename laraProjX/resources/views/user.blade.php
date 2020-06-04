@extends('layout.userPage')

@section('title', 'Area User')
@section('head')
<style>
    .cover{height: auto;}
    .areaUtente{height: 500px;width: 70%;margin: auto}
    .areaUtente h2{text-align: center;font-family: Arial, Helvetica, sans-serif;color: #666666}
    .areaUtente p{text-align: center;}
    .info_utente{ width: 40%;height: 50%;position: absolute;margin-left: 5%;}
    .info_utente h3{font-family: Arial, Helvetica, sans-serif;color: #666666}
    .info_utente p{text-align: initial;}
    .info_utente b{font-style: italic}
    .opzione{ width: 50%;float: right;height: 45%;width: 40%}
    .opzione ul{display: block;list-style: none;width: 100%;height: 100%;}
    .opzione ul li{text-align: center;width: 45%;height: 30%; background-color: #F1F1F1; border-radius: 20px; margin:10px;}
    .opzione ul li a{text-decoration: none;color: black; vertical-align:middle}
</style>
@endsection
@section('content')
<div class="areaUtente">
    <h2>Area Utente</h2>
    <p>Benvenuto <b> {{ Auth::user()->nome }} {{ Auth::user()->cognome }} </b> </p>
    <p>Consulta il catalogo e scegli ciò che fa per te! </p>
    <div class="info_utente">
        <h3>INFORMAZIONI UTENTE </h3>
        
        <p>Nome : <b> {{ Auth::user()->nome }} </b> </p>
        <p>Cognome : <b> {{ Auth::user()->cognome }} </b> </p>
        <p>Username : <b> {{ Auth::user()->username }} </b> </p>
         <p>Data di nascita : <b> {{ Auth::user()->nascita }} </b> </p>
        <p>Email : <b> {{ Auth::user()->email }} </b> </p>
        <p>Residenza : <b> {{ Auth::user()->residenza }} </b> </p>
        <p>Occupazione : <b> {{ Auth::user()->occupazione }} </b> </p>
        
    </div>
   
   <div class="opzione">
        <ul>
            <li><a href="{{route('changeinfo')}}"> MODIFICA INFORMAZIONI UTENTE </a></li>
            <li><a href="{{route('changepassword')}}" > MODIFICA PASSWORD </a> </li>
        </ul>
    </div>

    
</div>
@endsection


