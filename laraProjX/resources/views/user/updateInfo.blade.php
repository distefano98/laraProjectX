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
                
@endsection

@section('title', 'Gestione Account')

@section('content')

<div class="register_form">
    <h3>MODIFICA CREDENZIALI</h3>
        {{Form::open(array('route' => 'changeinfo.store', 'id' => 'changeInfo', 'files' => true, 'class' => 'contact-form')) }}

    <div class="register_form_item">
        {{ Form::label('nome', 'Nome', ['class' => 'label-form']) }} 
        {{ Form::text('nome', Auth::user()->nome, ['class' => 'input','id' => 'nome']) }}
        @if ($errors->first('nome'))
            <ul class="errors">
                @foreach ($errors->get('nome') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    
    <div  class="register_form_item">
        {{ Form::label('cognome', 'Cognome', ['class' => 'label-form']) }}
        {{ Form::text('cognome', Auth::user()->cognome, ['class' => 'input', 'id' => 'cognome']) }}
        @if ($errors->first('cognome'))
            <ul class="errors">
                @foreach ($errors->get('cognome') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    
    <div class="register_form_item">
        {{ Form::label('email', 'Email', ['class' => 'label-form']) }}
        {{ Form::text('email', Auth::user()->email, ['class' => 'input', 'id' => 'email']) }}
        @if ($errors->first('email'))
            <ul class="errors">
                @foreach ($errors->get('email') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
      
    <div class="register_form_item">
        {{ Form::label('residenza', 'Residenza', ['class' => 'label-form']) }}
        {{ Form::text('residenza',  Auth::user()->residenza, ['class' => 'input', 'id' => 'residenza']) }}
        @if ($errors->first('residenza'))
            <ul class="errors">
                @foreach ($errors->get('residenza') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div> 
        
    <div class="register_form_item">
        {{ Form::label('occupazione', 'Occupazione', ['class' => 'label-form']) }}
        {{ Form::select('occupazione', ['ingegnere' => 'Ingegnere', 'operaio' => 'Operaio', 'architetto' => 'Architetto', 'professore' => 'Professore',  'tecnico' => 'Tecnico', 'impiegato' => 'Impiegato', 'altro' => 'Altro'],['class' => 'input', 'id' => 'occupazione', 'name' => Auth::user()->occupazione]) }}
        @if ($errors->first('occupazione'))
            <ul class="errors">
                @foreach ($errors->get('occupazione') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div> 
        
    <div class="pulsante">                
        {{ Form::submit('Registrami', ['class' => 'button-form']) }}
    </div>

    {{Form::close() }}

</div>
@endsection