@extends('admin')

@section('head')
<style>
    
    .delete_form{margin: auto;width: 2em;}
    .pulsante{text-align: center;margin:1em}
    
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('scripts')


<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {

        $('#check_all').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".checkbox").prop('checked', true);  
         } else {  
            $(".checkbox").prop('checked',false);  
         }  
        });

         $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length === $('.checkbox').length){
                $('#check_all').prop('checked',true);
            }else{
                $('#check_all').prop('checked',false);
            }
         });

        $('.btn-danger').on('click', function(e) {


            var idsArr = [];  
            $(".checkbox:checked").each(function() {  
                idsArr.push($(this).attr('value'));
            });  


            if(idsArr.length <=0)  
            {  
                alert("Per favore seleziona almeno uno User.");  
            }  else {  

                if(confirm("Sei sicuro di voler eliminare gli User selezionati?")){  

                    var strIds = idsArr.join(","); 

                    $.ajax({
                        url: "{{ route('multiple-delete') }}",
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+strIds,
                        success: function (data) {
                            if (data['status']==true) {
                                $(".checkbox:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                            } else {
                                alert('Errore imprevisto!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                }  
            }  
        });

        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.closest('form').submit();
            }
        });   
    
    });
</script>

@section('funzioni')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table  style="margin: auto;border: 1;" border=" 1" class="table table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
            <th>Data di nascita</th>
            <th>Residenza</th>
            <th>Occupazione</th>
            <th>Username</th>
            <th>Data Creazione</th>
            <th><input type="checkbox" id="check_all"></th>
        </tr>
   </thead>
   <tbody>

    @foreach($users as $user)
        <tr id="tr_{{$user->id}}">
            <td>{{$user->nome}} </td>
            <td>{{$user->cognome}} </td>
            <td>{{$user->email}} </td>
            <td>{{$user->nascita}} </td>
            <td>{{$user->residenza}} </td>
            <td>{{$user->occupazione}} </td>
            <td>{{$user->username}} </td>
            <td>{{$user->created_at}} </td>
            <td><input type="checkbox" class="checkbox" name= "ids[]" value="{{$user->id}}"></td>
            
        </tr>
    @endforeach
   </tbody>
</table>
    <div class="update_form">
            {{ Form::open(['method' => 'GET','route' => ['deleteuser', $user->id]]) }}

            <div class="pulsante">
            {{ Form::button('Cancella', ['class' => 'btn btn-danger ', 'data-toggle'=>'confirmation', 'data-placement'=>'left']) }}
            </div>
            </a>
            {{ Form::close() }}
    </div>
@endsection