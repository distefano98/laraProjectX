@extends('admin')

@section('head')
<style>
    
    .delete_form{margin: auto;width: 2em;}
    .pulsante{text-align: center;margin:1em}
    
</style>
@section('scripts')


<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
});
</script>

@section('funzioni')

<table  style="margin: auto;border: 1;" border=" 1" class="table table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
            <th>Data di nascita</th>
            <th>Residenza</th>
            <th>Occupazione</th>
            <th>Username</th>
            <th>Data Creazione</th>
            <th><input type="checkbox" id="check_all"></th>
        </tr>
   </thead>
   <tbody>

    @foreach($users as $user)
        <tr id="tr_{{$user->id}}">
            <td>{{$user->nome}} </td>
            <td>{{$user->cognome}} </td>
            <td>{{$user->email}} </td>
            <td>{{$user->nascita}} </td>
            <td>{{$user->residenza}} </td>
            <td>{{$user->occupazione}} </td>
            <td>{{$user->username}} </td>
            <td>{{$user->created_at}} </td>
            <td><input type="checkbox" class="checkbox" user-id="{{$user->id}}"></td>
            
        </tr>
    @endforeach
   </tbody>
</table>
    <div class="update_form">
            {{ Form::open(['method' => 'GET','route' => ['deleteuser', $user->id]]) }}
            <a href=" {{ route('deleteuser', [$user->id]) }} " name="Cancella User" >
            <div class="pulsante">
            {{ Form::button('Cancella', ['class' => 'button-form']) }}
            </div>
            </a>
            {{ Form::close() }}
    </div>
@endsection