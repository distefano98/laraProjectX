@extends('layout.staffPage')

@section('title', 'Inserimento prodotto')
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
    var formId = 'newproduct';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#newproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
<div class="insert_form">
    <h3>Aggiungi un nuovo prodotto</h3>
    

    
     
            {{ Form::open(array('route' => 'newproduct.store', 'id' => 'newproduct', 'files' => true, 'class' => 'contact-form')) }}
            
            <div  class="insert_form_item">
                {{ Form::label('nome', 'Nome Prodotto', ['class' => 'label-input']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome','placeholder'=>'iphone 1 ']) }}
                
            </div>

            <div  class="insert_form_item">
                {{ Form::label('catId', 'Categoria', ['class' => 'label-input']) }}
                {{ Form::select('catId', $cats, '', ['class' => 'input', 'id' => 'catId']) }}
            </div>

            <div  class="insert_form_item">
                {{ Form::label('marca', 'Marca', ['class' => 'label-input']) }}
                {{ Form::text('marca', '', ['class' => 'input', 'id' => 'marca','placeholder'=>'iphone']) }}
                
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('processore', 'Processore', ['class' => 'label-input']) }}
                {{ Form::text('processore', '', ['class' => 'input', 'id' => 'processore','placeholder'=>'A 1 gch']) }}
               
            </div>
            <div  class="insert_form_item">
                {{ Form::label('dimDisplay', 'Dimensione Display', ['class' => 'label-input']) }}
                {{ Form::text('dimDisplay', '', ['class' => 'input', 'id' => 'dimDisplay','placeholder'=>'2.3']) }}
               
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('risDisplay', 'Risoluzione Display', ['class' => 'label-input']) }}
                {{ Form::text('risDisplay', '', ['class' => 'input', 'id' => 'risDisplay','placeholder'=>'230x450']) }}
               
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('ram', 'RAM', ['class' => 'label-input']) }}
                {{ Form::text('ram', '', ['class' => 'input', 'id' => 'ram','placeholder'=>'1']) }}
               
               
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('memoria', 'Memoria', ['class' => 'label-input']) }}
                {{ Form::text('memoria', '', ['class' => 'input', 'id' => 'memoria','placeholder'=>'20']) }}
              
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('schedaGraf', 'Scheda Grafica', ['class' => 'label-input']) }}
                {{ Form::text('schedaGraf', '', ['class' => 'input', 'id' => 'schedaGraf','placeholder'=>'proprietaria apple']) }}
               
            </div>
            
            <div  class="insert_form_item">
                {{ Form::label('fotocamera', 'Fotocamera', ['class' => 'label-input']) }}
                {{ Form::text('fotocamera', '', ['class' => 'input', 'id' => 'fotocamera','placeholder'=>'1 mp , f 1.4 .... ']) }}
               
            </div>
            <div  class="insert_form_item">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
               
            </div>

            <div  class="insert_form_item">
                {{ Form::label('descShort', 'Descrizione Breve', ['class' => 'label-input']) }}
                {{ Form::text('descShort', '', ['class' => 'input', 'id' => 'descShort','placeholder'=>'....']) }}
             
            </div>

            <div  class="insert_form_item">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                {{ Form::text('prezzo', '', ['class' => 'input', 'id' => 'price','placeholder'=>'200']) }}
             
            </div>

            <div  class="insert_form_item">
                {{ Form::label('scontoPerc', 'Sconto (%)', ['class' => 'label-input']) }}
                {{ Form::text('scontoPerc', '', ['class' => 'input', 'id' => 'discountPerc','placeholder'=>'20']) }}
              
            </div>

            <div  class="insert_form_item">
                {{ Form::label('sconto', 'In Sconto', ['class' => 'label-input']) }}
                {{ Form::select('sconto', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'discounted']) }}
            </div>

            <div  class="insert_form_item">
                {{ Form::label('descLong', 'Descrizione Estesa', ['class' => 'label-input']) }}
                {{ Form::textarea('descLong', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                
            </div>
            
            <div class="pulsante">                
                {{ Form::submit('Aggiungi Prodotto', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
       
   

</div>
@endsection


