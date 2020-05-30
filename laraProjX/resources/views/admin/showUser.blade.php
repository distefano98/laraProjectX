@extends('admin')




@section('funzioni')

<table  style="margin: auto;border: 1;" border=" 1" class="table table-hover">
  <thead>
  <tr>
   <th>Nome</th>
   <th>Cognome</th>
   <th>Email</th>
   <th>Residenza</th>
   <th>Occupazione</th>
   <th>Username</th>
   <th>Data Creazione</th>
   <th>Cancella</th>
  </tr>
 </thead>
 <tbody>

 @foreach($users as $user)
    <tr>
      <td>{{$user->nome}} </td>
      <td>{{$user->cognome}} </td>
      <td>{{$user->email}} </td>
      <td>{{$user->residenza}} </td>
      <td>{{$user->occupazione}} </td>
      <td>{{$user->username}} </td>
      <td>{{$user->created_at}} </td>
      <td> <a href="{{route('deleteuser' , [$user->id]) }}"> <input type="submit" value="Cancella" name="Cancella" /> </a></td>
    </tr>
 @endforeach
 </tbody>
</table>

@endsection