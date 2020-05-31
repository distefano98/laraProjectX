@extends('staff')

@section('head')
@parent
<style>
    .newcategory_form{margin-top: 8%}
    
</style>
@endsection

@section('funzioni')


<div style=" width:100%; clear:both; ">
    
    
 <div style="float:left; height: 200px">
     <h3> CATEGORIE</h3>
    <table  border="1" class="table table-hover">
  
 
     <tbody>
            @foreach ($macroCategories as $category)
          <td>{{$category->nome}} </td>
                @endforeach
     </tbody>
    </table>
      <div class="newcategory">
  {{ Form::open(array('route' => 'newcategory', 'class' => 'newcategory_form')) }}
  {{ Form::text('nome', null, ['placeholder' => 'inserisci nome categoria','class'=>'form-text']) }}
  {{ Form::submit('Aggiungi categoria',['class'=>'pulsante']) }}
  {{ Form::close() }}
</div>
</div>
    
<div style="   float:right;  height: 200px">
      
    
      
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
