@extends('layout.publicPage')

@section('title', 'Modifica prodotto')
@section('head')
<style>
    
    .update_form{margin: auto;width: 30%;}
    .update_form h3{text-align: center;}
    .update_form_item{text-align: center;clear: both;}
    .update_form_item input,select{float: right;}
    .update_form_item label{float: left}
    .pulsante{text-align: center;margin:8%}
    
</style>
                
@endsection
@section('scripts')

@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('changeproduct.update', [$product->prodId]) }}";
    var formId = 'changeproduct';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#changeproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')

<div class="update_form">
    <h3>MODIFICA PRODOTTO</h3>
        {{ Form::open(array('route' => ['changeproduct.update', $product->prodId], 'id' => 'changeproduct', 'files' => true, 'class' => 'contact-form')) }}

    <div class="update_form_item">
        {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }} 
        {{ Form::text('nome', $product->nome, ['class' => 'input','id' => 'nome']) }}
    </div>
    
    <div  class="update_form_item">
        {{ Form::label('catId', 'Categoria', ['class' => 'label-input']) }}
        {{ Form::select('catId', $cats, $product->catId, ['class' => 'input','id' => 'catId']) }}
    </div>
        
    <div class="update_form_item">
        {{ Form::label('marca', 'Marca', ['class' => 'label-input']) }} 
        {{ Form::text('marca', $product->marca,['class' => 'input','id' => 'marca']) }}
        </div>

    <div class="update_form_item">
        {{ Form::label('processore', 'Processore', ['class' => 'label-input']) }} 
        {{ Form::text('processore', $product->processore,['class' => 'input','id' => 'processore']) }}
    </div>
        
    <div class="update_form_item">
        {{ Form::label('dimDisplay', 'Dimensione Display', ['class' => 'label-input']) }} 
        {{ Form::text('dimDisplay', $product->dimDisplay, ['class' => 'input','id' => 'dimDisplay']) }}
    </div>

    <div class="update_form_item">
        {{ Form::label('risDisplay', 'Risoluzione Display', ['class' => 'label-input']) }} 
        {{ Form::text('risDisplay', $product->risDisplay,['class' => 'input','id' => 'risDisplay']) }}
        </div>
    
    <div class="update_form_item">
        {{ Form::label('ram', 'RAM', ['class' => 'label-input']) }} 
        {{ Form::text('ram', $product->ram,['class' => 'input','id' => 'ram']) }}
    </div>
        
    <div class="update_form_item">
        {{ Form::label('memoria', 'Memoria', ['class' => 'label-input']) }} 
        {{ Form::text('memoria', $product->memoria,['class' => 'input','id' => 'memoria']) }}
    </div>
    
    <div class="update_form_item">
        {{ Form::label('schedaGraf', 'Scheda Grafica', ['class' => 'label-input']) }} 
        {{ Form::text('schedaGraf', $product->schedaGraf,['class' => 'input','id' => 'schedaGraf']) }}
    </div>
 
    <div class="update_form_item">
        {{ Form::label('fotocamera', 'Fotocamera', ['class' => 'label-input']) }} 
        {{ Form::text('fotocamera', $product->fotocamera,['class' => 'input','id' => 'fotocamera']) }}
    </div>
    
    <div class="update_form_item">
        {{ Form::label('descShort', 'Breve Descrizione', ['class' => 'label-input']) }} 
        {{ Form::text('descShort', $product->descShort,['class' => 'input','id' => 'descShort']) }}
    </div>    
    
    <div class="update_form_item">
        {{ Form::label('descLong', 'Descrizione', ['class' => 'label-input']) }} 
        {{ Form::textarea('descLong', $product->descLong,['class' => 'input','id' => 'descLong', 'rows' => 10]) }}
    </div>    
    
    <div class="update_form_item">
        {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }} 
        {{ Form::text('prezzo', $product->prezzo,['class' => 'input','id' => 'prezzo']) }}
    </div>   
    
    <div class="update_form_item">
        {{ Form::label('scontoPerc', 'Percentuale di Sconto', ['class' => 'label-input']) }} 
        {{ Form::text('scontoPerc', $product->scontoPerc,['class' => 'input','id' => 'scontoPerc']) }}
    </div> 

    <div class="update_form_item">
        {{ Form::label('sconto', 'Sconto', ['class' => 'label-input']) }} 
        {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'], $product->sconto, ['class' => 'input','id' => 'discounted']) }}
    </div> 
    
    <div  class="update_form_item">
        {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
        {{ Form::file('image', $product->imageName, ['class' => 'input', 'id' => 'image']) }}
    </div>
        
    <div class="pulsante">                
        {{ Form::submit('Applica Modifiche', ['class' => 'button-form']) }}
    </div>

    {{Form::close() }}

</div>
@endsection