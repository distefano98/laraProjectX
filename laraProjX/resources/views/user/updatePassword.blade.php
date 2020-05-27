@extends('layout.userPage')

@section('title', 'modifica password')
@section('head')
<style>
    .cover{height: auto}
    .update_form{margin: auto;width: 40%;height: 500px;}
    .update_form h3{font-style: italic;padding: 5%;text-align: center}
    .update_form_item {text-align: center;clear: both;}
    .update_form_item label{text-align: center;float: left;}
    .update_form_item  input{float: right;}
    .pulsante{text-align: center;margin: 8%;}
    
    .errors{list-style: none;color: red}
</style>
@endsection


@section('content')
<div class="update_form">
    <h3>MODIFICA PASSWORD</h3>
    {{ Form::open(array('route' => 'changepassword.store', 'id' => 'changePassword', 'files' => true, 'class' => 'contact-form')) }}
         
         <div class="update_form_item">
        {{ Form::label('password', 'Password Attuale', ['class' => 'label-form']) }}
        {{ Form::password('password',   ['class' => 'input','name'=>'current_password', 'id' => 'current_password']) }}
        
        @if ($errors)
            <ul class="errors">
                @foreach ($errors->get('current_password') as $message)
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
                {{ Form::submit('Modifica Password', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
       
   

</div>
@endsection


