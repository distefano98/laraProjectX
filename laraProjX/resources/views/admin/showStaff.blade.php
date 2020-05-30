@extends('admin')




@section('funzioni')

<table style="margin: auto" border=" 1" class="table table-hover">
  <thead>
  <tr>
   <th>Nome</th>
   <th>Cognome</th>
   <th>Username</th>
   
   <th> </th>
   <th> </th>
  
  </tr>
 </thead>
 <tbody>

 @foreach($users as $user)
    <tr>
      <td>{{$user->nome}} </td>
      <td>{{$user->cognome}} </td>
      <td>{{$user->username}} </td>
      
      <td> <a href="{{route('updatestaff',[$user->id])}}">  <input type="submit" value="Modifica" name="Modifica" /> </a>  </a> </td>
      <td> <a href=""> Cancella </a></td>
      
    </tr>
 @endforeach
 </tbody>
</table>
<div style="margin: 5%;width: auto;float: right">
    <a href="{{route('newstaff')}}">  <input type="submit" value="Aggiungi Nuovo Membro Staff" name="Aggiungi Nuovo Membro Staff" /> </a>
         
</div>
@endsection



