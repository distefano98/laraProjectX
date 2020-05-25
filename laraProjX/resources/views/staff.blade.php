@extends('layout.staffPage')

@section('title', 'Area Staff')
@section('head')
<style>
</style>

@endsection
@section('content')
<div class="areaStaff">
    <h2>Area Staff</h2>
    <p>Benvenuto membro del nostro staff<b> {{ Auth::staff()->nome }} {{ Auth::staff()->cognome }} </b> </p>
    <p>Scegli se inserire, modificare o cancellare un prodotto </p>
    
   
   <div class="opzione">
        <ul>
		    <li> <a href="" >  INSERISCI UN NUOVO PRODOTTO</li>
            <li> <a href="" >  MODIFICA UN PRODOTTO </li>
            <li> <a href="" >  CANCELLA UN PRODOTTO</a></li>
        </ul>
    </div>

    
</div>
@endsection


