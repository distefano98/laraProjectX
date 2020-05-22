@extends('layout.userPage')

@section('title', 'Area User')

@section('content')
<div class="static">
    <h2>Area Utente</h2>
    <p>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</p>
    <p>Consulta il catalogo e scegli ciò che fa per te! Attualmente sono disponibili pi&ugrave; di 50 prodotti</p>
    
</div>
@endsection


