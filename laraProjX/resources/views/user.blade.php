@extends('layout.userPage')

@section('title', 'Area User')

@section('content')
<div class="static">
    <h3>Area Utente</h3>
    <p>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</p>
    <p>Seleziona la funzione da attivare</p>
</div>
@endsection


