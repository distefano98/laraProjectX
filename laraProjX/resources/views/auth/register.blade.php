@extends('layout.publicPage')
@section('head')
<style>
    
</style>
                
@endsection

@section('title', 'REGISTRATI')

@section('content')

<div class="login_form">
    <h3>REGISTRAZIONE</h3>
        {{Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

    <div class="register_form">
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
    
    <div  class="register_form">
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
    
    <div class="register_form">
        {{ Form::label('email', 'Email', ['class' => 'label-form']) }}
        {{ Form::text('email', '', ['class' => 'input', 'id' => 'email']) }}
        @if ($errors->first('email'))
            <ul class="errors">
                @foreach ($errors->get('email') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
        
    <div class="register_form">
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

    <div class="register_form">
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
        
    <div class="register_form">
        {{ Form::label('residenza', 'Residenza', ['class' => 'label-form']) }}
        {{ Form::text('residenza', 'Città (Provincia)' , ['class' => 'input','id' => 'residenza']) }}
        @if ($errors->first('residenza'))
            <ul class="errors">
                @foreach ($errors->get('residenza') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div> 
        
    <div class="register_form">
        {{ Form::label('occupazione', 'Occupazione', ['class' => 'label-form']) }}
        {{ Form::select('occupazione', [], ['class' => 'input', 'id' => 'occupazione']) }}
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