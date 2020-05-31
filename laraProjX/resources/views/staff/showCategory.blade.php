@extends('staff')





@section('funzioni')


<div style=" width:100%; clear:both; ">
    <div style=" width:50%; float:left; border: 1px solid red;">
    <h3> CATEGORIE</h3>
<table style="margin: auto ; "border=" 1" class="table table-hover">
  
 
 <tbody>
            @foreach ($macroCategories as $category)
          <td>{{$category->nome}} </td>
                @endforeach
       </tbody>
       </table>
</div>
  <div style=" width:50%;  float:right;  border: 1px solid greenyellow;">
      
      
<!-- tabella sottocategorie  -->
<h3>SOTTOCATEGORIE</h3>
<table style="margin: auto" border=" 1" class="table table-hover">
  
 
 <tbody>
            @foreach ($sottoCategs as $category)
          <td>{{$category->nome}} </td>
                @endforeach
       </tbody>
       </table>


</div>



</div>



@endsection
