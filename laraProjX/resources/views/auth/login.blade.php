@extends('layout.publicPage')

@section('head')
<style>
    .login_form{margin: auto;width: 40%;}
    .login_form h3{font-style: italic;padding: 5%}
    .contact-form{text-align: center;padding: 2%;border: 1px solid black;}
</style>
                
@endsection


@section('title', 'ACCEDI')

@section('content')

<div class="login_form">
    <h3>SEI UN UTENTE REGISTRATO ?     ACCEDI ORA</h3>
{{Form::open(array('route' => 'login', 'class' => 'contact-form')) }}

<div class="login_form_field">
   {{Form::label('username',  'USERNAME', ['class' => 'label-form']) }} 
     {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
     </div>
    
  <div  class="login_form_field">
                {{ Form::label('password', 'PASSWORD', ['class' => 'label-form']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}           
    
    </div>
    
 <div class="pulsante">
   {{ Form::submit('LOGIN', ['class' => 'botton-form'])}}
     </div>

  <div> <a href="{{ route('register') }}"> Non hai un account ? Registrati ora  </a>
       </div>

{{Form::close() }}

</div>
@endsection