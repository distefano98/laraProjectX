@extends('admin')




@section('funzioni')

<table style="margin: auto;border: 1;" border=" 1"; class="table table-hover">
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
      
      <td> <a href=""> Modifica </a> </td>
      <td> <a href=""> Cancella </a></td>
      
    </tr>
 @endforeach
 </tbody>
</table>

@endsection



