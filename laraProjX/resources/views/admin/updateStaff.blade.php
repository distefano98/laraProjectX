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

@section('title', 'Modifica Membro Staff')

@section('content')

<div class="update_form">
    <h3>MODIFICA MEMBRO STAFF</h3>
        {{Form::open(array('route' => 'editstaff.store)', 'id' => 'edistStaff', 'files' => true, 'class' => 'contact-form')) }}

    <div class="update_form_item">
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
    
    <div  class="update_form_item">
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
    
   
        
        
    <div class="update_form_item">
        {{ Form::label('username', 'Username', ['class' => 'label-form']) }}
        {{ Form::text('username', Auth::user()->username, ['class' => 'input', 'id' => 'username']) }}
        @if ($errors->first('email'))
            <ul class="errors">
                @foreach ($errors->get('email') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
      
     <div class="update_form_item">
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

