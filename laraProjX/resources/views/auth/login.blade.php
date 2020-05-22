@extends('layout.publicPage')

@section('head')
<style>
    .login_form{margin: auto;width: 20%;}
    .login_form h3{font-style: italic;padding: 5%}
    .login_form_field {clear: both;}
    .login_form_field input{float: right;}
    .pulsante{text-align: center;margin: 5%;}
    .registrazione{text-align: center;font-size: larger}
    .registrazione a{font-style: italic;color: black}
    .errors{list-style: none;color: red}
</style>
                
@endsection


@section('title', 'ACCEDI')

@section('content')

<div class="login_form">
    <h3>SEI UN UTENTE REGISTRATO ?     ACCEDI ORA</h3>
    {{Form::open(array('route' => 'login', 'class' => 'contact-form')) }}

    <div class="login_form_field">
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
    
    <div  class="login_form_field">
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
    
 <div class="pulsante">
   {{ Form::submit('Login', ['class' => 'button-form'])}}
     </div>

    <div class="registrazione">
        <a href="{{ route('register') }}"> Non hai un account ? <br> Registrati ora  </a>
</div>

{{Form::close() }}

</div>
@endsection