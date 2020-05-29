@extends('layout.adminPage')

@section('title', 'Amministratore')
@section('head')
<style>
    .cover{height: auto;}
    .areaAdmin{height: 500px;width: 100%;margin: auto}
    .areaAdmin h2{text-align: center;font-family: Arial, Helvetica, sans-serif;color: #666666}
    .areaAdmin p{text-align: center;}
    .opzione{width: 100%;height: 30%}
    .opzione ul{list-style: none;padding: 0;width: 100%;text-align: center;}
    .opzione ul li{display: inline-block;text-align: center ;width: 20%;  border: 0.5px solid #666666}
    .opzione ul li a{text-decoration: none;color: black}
</style>

@endsection
@section('content')
<div class="areaAdmin">
    <h2>Area Amministratore</h2> 
    <p>Benvenuto  capo </p>
    <p>Scegli che azione effettuare</p>
    
   
   <div class="opzione">
        <ul>
            <li> <a href="" > NUOVO MEMBRO STAFF </a></li>
            <li> <a href="" >  MODIFICA MEMBRO STAFF </a> </li> 
            <li> <a href="" >  CANCELLA MEMBRO STAFF </a> </li>
            <li> <a href="" >  CANCELLA UTENTE </a> </li>
        </ul>
    </div>

    
</div>
@endsection
