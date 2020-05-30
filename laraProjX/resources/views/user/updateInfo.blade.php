@extends('layout.publicPage')
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
@section('scripts')


<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('changeinfo.store') }}";
    var formId = 'changeInfo';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#changeInfo").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection                
@endsection

@section('title', 'Gestione Account')

@section('content')

<div class="update_form">
    <h3>MODIFICA CREDENZIALI</h3>
        {{Form::open(array('route' => 'changeinfo.store', 'id' => 'changeInfo', 'files' => true, 'class' => 'contact-form')) }}

    <div class="update_form_item">
        {{ Form::label('nome', 'Nome', ['class' => 'label-form']) }} 
        {{ Form::text('nome', Auth::user()->nome, ['class' => 'input','id' => 'nome']) }}
        
    </div>
    
    <div  class="update_form_item">
        {{ Form::label('cognome', 'Cognome', ['class' => 'label-form']) }}
        {{ Form::text('cognome', Auth::user()->cognome, ['class' => 'input', 'id' => 'cognome']) }}
        
    </div>
    
    <div class="update_form_item">
        {{ Form::label('email', 'Email', ['class' => 'label-form']) }}
        {{ Form::text('email', Auth::user()->email, ['class' => 'input', 'id' => 'email']) }}
       
    </div>
      
    <div class="update_form_item">
        {{ Form::label('residenza', 'Residenza', ['class' => 'label-form']) }}
        {{ Form::text('residenza',  Auth::user()->residenza, ['class' => 'input', 'id' => 'residenza']) }}
        
    </div> 
        
    <div class="update_form_item">
        {{ Form::label('occupazione', 'Occupazione', ['class' => 'label-form']) }}
        {{ Form::select('occupazione', ['ingegnere' => 'Ingegnere', 'operaio' => 'Operaio', 'architetto' => 'Architetto', 'professore' => 'Professore',  'tecnico' => 'Tecnico', 'impiegato' => 'Impiegato', 'altro' => 'Altro'],['class' => 'input', 'id' => 'occupazione', 'name' => Auth::user()->occupazione]) }}
        
    </div> 
        
    <div class="pulsante">                
        {{ Form::submit('Applica Modifiche', ['class' => 'button-form']) }}
    </div>

    {{Form::close() }}

</div>
@endsection