@extends('admin')


@section('head')
<style>
    
    .update_form{margin: auto;width: 30%;}
    .update_form h3{text-align: center;}
    .update_form_item{text-align: center;clear: both;}
    .update_form_item input,select{float: right;}
    .update_form_item label{float: left}
    .pulsante{text-align: center;margin:8%}
    
    .errors{list-style: none;color: red}
</style>
                
@endsection
@section('scripts')


<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('updatestaff.store', $user->id) }}";
    var formId = 'updatestaff';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#updatestaff").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection
@section('title', 'Modifica Membro Staff')

@section('content')

<div class="update_form">
    <h3>MODIFICA MEMBRO STAFF</h3>
        {{Form::open(array('route' => ['updatestaff.store', $user->id], 'id' => 'updatestaff', 'files' => true, 'class' => 'contact-form')) }}

    <div class="update_form_item">
        {{ Form::label('nome', 'Nome', ['class' => 'label-form']) }} 
        {{ Form::text('nome', $user->nome , ['class' => 'input','id' => 'nome']) }}
        
    </div>
    
    <div  class="update_form_item">
        {{ Form::label('cognome', 'Cognome', ['class' => 'label-form']) }}
        {{ Form::text('cognome', $user->cognome, ['class' => 'input', 'id' => 'cognome']) }}
        
    </div>
    
   
        
        
    
      
     <div class="update_form_item">
        {{ Form::label('password', 'Password', ['class' => 'label-form']) }}
        {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
        
    </div>   
        
     <div  class="update_form_item">
        {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-form']) }}
        {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password_confirmation']) }}
    </div>
        
        
    <div class="pulsante">                
        {{ Form::submit('Applica Modifiche', ['class' => 'button-form']) }}
    </div>

    {{Form::close() }}

</div>
@endsection

