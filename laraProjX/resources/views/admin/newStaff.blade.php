@extends('admin')
@section('head')
<style>
    
    .register_form{margin: auto;width: 30%;}
    .register_form h3{text-align: center;}
    .register_form_item{text-align: center;clear: both;}
    .register_form_item input,select{float: right;}
    .register_form_item label{float: left}
    .pulsante{text-align: center;margin:8%}
    
    .errors{list-style: none;color: red}
</style>
                
@endsection

@section('title', 'NEW STAFF MEMBER')

@section('content')

<div class="register_form">
    <h3>REGISTRAZIONE</h3>
        {{Form::open(array('route' => 'newstaff.store', 'class' => 'contact-form')) }}

    <div class="register_form_item">
        {{ Form::label('nome', 'Nome', ['class' => 'label-form']) }} 
        {{ Form::text('nome', '', ['class' => 'input','id' => 'nome']) }}
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
        {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome']) }}
        @if ($errors->first('cognome'))
            <ul class="errors">
                @foreach ($errors->get('cognome') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    
  
        
    <div class="register_form_item">
        {{ Form::label('username', 'Username', ['class' => 'label-form']) }}
        {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
        @if ($errors->first('username'))
            <ul class="errors">
                @foreach ($errors->get('username') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="register_form_item">
        {{ Form::label('password', 'Password', ['class' => 'label-form']) }}
        {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
        @if ($errors->first('password'))
            <ul class="errors">
                @foreach ($errors->get('password') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>   
        
     <div  class="register_form_item">
        {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-form']) }}
        {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password_confirmation']) }}
    </div>
        
   
        
    
        
    <div class="pulsante">                
        {{ Form::submit('Aggiungi', ['class' => 'button-form']) }}
    </div>

    {{Form::close() }}

</div>
@endsection
