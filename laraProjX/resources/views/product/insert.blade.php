@extends('layout.staffPage')

@section('title', 'inserimento prodotto')
@section('head')
<style>
    .cover {height: auto;}
    .insert_form{margin: auto;width: 40%;height: 800px}
    .insert_form h3{text-align: center;}
    .insert_form_item{text-align: center;clear: both;}
    .insert_form_item input,select{float: right;}
    .insert_form_item label{float: left}
    .pulsante{text-align: center;margin:8%}
    
    .errors{list-style: none;color: red}
</style>
@endsection
@section('scripts')

@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('newproduct.store') }}";
    var formId = 'addproduct';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection
@section('content')
<div class="insert_form">
    <h3>Aggiungi un nuovo prodotto</h3>
    

    
     
            {{ Form::open(array('route' => 'newproduct.store', 'id' => 'addproduct', 'files' => true, 'class' => 'contact-form')) }}
            
            <div  class="insert_form_item">
                {{ Form::label('nome', 'Nome Prodotto', ['class' => 'label-input']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome','placeholder'=>'iphone 1 ']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="insert_form_item">
                {{ Form::label('catId', 'Categoria', ['class' => 'label-input']) }}
                {{ Form::select('catId', $cats, '', ['class' => 'input','id' => 'catId']) }}
            </div>

            <div  class="insert_form_item">
                {{ Form::label('marca', 'Marca', ['class' => 'label-input']) }}
                {{ Form::text('marca', '', ['class' => 'input', 'id' => 'marca','placeholder'=>'iphone']) }}
                @if ($errors->first('marca'))
                <ul class="errors">
                    @foreach ($errors->get('marca') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('processore', 'Processore', ['class' => 'label-input']) }}
                {{ Form::text('processore', '', ['class' => 'input', 'id' => 'processore','placeholder'=>'A 1 gch']) }}
                @if ($errors->first('processore'))
                <ul class="errors">
                    @foreach ($errors->get('processore') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="insert_form_item">
                {{ Form::label('dimDisplay', 'Dimensione Display', ['class' => 'label-input']) }}
                {{ Form::text('dimDisplay', '', ['class' => 'input', 'id' => 'dimDisplay','placeholder'=>'2.3']) }}
                @if ($errors->first('dimDisplay'))
                <ul class="errors">
                    @foreach ($errors->get('dimensione Display') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('risDisplay', 'Risoluzione Display', ['class' => 'label-input']) }}
                {{ Form::text('risDisplay', '', ['class' => 'input', 'id' => 'risDisplay','placeholder'=>'230x450']) }}
                @if ($errors->first('risDisplay'))
                <ul class="errors">
                    @foreach ($errors->get('risoluzione Display') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('ram', 'RAM', ['class' => 'label-input']) }}
                {{ Form::text('ram', '', ['class' => 'input', 'id' => 'ram','placeholder'=>'1']) }}
                @if ($errors->first('ram'))
                <ul class="errors">
                    @foreach ($errors->get('ram') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('memoria', 'Memoria', ['class' => 'label-input']) }}
                {{ Form::text('memoria', '', ['class' => 'input', 'id' => 'memoria','placeholder'=>'20']) }}
                @if ($errors->first('memoria'))
                <ul class="errors">
                    @foreach ($errors->get('memoria') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('schedaGraf', 'Scheda Grafica', ['class' => 'label-input']) }}
                {{ Form::text('schedaGraf', '', ['class' => 'input', 'id' => 'schedaGraf','placeholder'=>'proprietaria apple']) }}
                @if ($errors->first('schedaGraf'))
                <ul class="errors">
                    @foreach ($errors->get('scheda Grafica') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('fotocamera', 'Fotocamera', ['class' => 'label-input']) }}
                {{ Form::text('fotocamera', '', ['class' => 'input', 'id' => 'fotocamera','placeholder'=>'1 mp , f 1.4 .... ']) }}
                @if ($errors->first('fotocamera'))
                <ul class="errors">
                    @foreach ($errors->get('fotocamera') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="insert_form_item">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('immagine') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="insert_form_item">
                {{ Form::label('descShort', 'Descrizione Breve', ['class' => 'label-input']) }}
                {{ Form::text('descShort', '', ['class' => 'input', 'id' => 'descShort','placeholder'=>'....']) }}
                @if ($errors->first('descShort'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione breve') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="insert_form_item">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                {{ Form::text('prezzo', '', ['class' => 'input', 'id' => 'price','placeholder'=>'200']) }}
                @if ($errors->first('price'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="insert_form_item">
                {{ Form::label('scontoPerc', 'Sconto (%)', ['class' => 'label-input']) }}
                {{ Form::text('scontoPerc', '', ['class' => 'input', 'id' => 'discountPerc','placeholder'=>'20']) }}
                @if ($errors->first('discountPerc'))
                <ul class="errors">
                    @foreach ($errors->get('percentuale sconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="insert_form_item">
                {{ Form::label('sconto', 'In Sconto', ['class' => 'label-input']) }}
                {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'discounted']) }}
            </div>

            <div  class="insert_form_item">
                {{ Form::label('descLong', 'Descrizione Estesa', ['class' => 'label-input']) }}
                {{ Form::textarea('descLong', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                @if ($errors->first('descLong'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione estesa') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div class="pulsante">                
                {{ Form::submit('Aggiungi Prodotto', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
       
   

</div>
@endsection


