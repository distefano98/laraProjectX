@extends ('layout.publicPage')
@section ('title','Where')
@section('head')

<style>
    .cover_mappa{ position: absolute; border:solid 1px grey; width:50%; height:60%;margin: 5% 5% 5% 5%}
    .info {float: right;width: 30%;height: 45%;margin-top:10%; margin-right: 5% }
    .info_item {clear: both;width: 98%;height: 38%;margin: 5%;margin-right: 0;}
    .info_item img{width: 12%;height: 30%;}
    .info_item p {float: right}
    .info_item a {text-decoration: none;color: black; font-style: italic}
    </style>
@endsection
@section('content')

<div class="cover_mappa">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7745.831225470831!2d-61.07110967973879!3d13.903992010996154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c40620d8811ad3f%3A0xcf54447d53dd1808!2sCanarie%2C%20Santa%20Lucia!5e0!3m2!1sit!2sit!4v1590047553282!5m2!1sit!2sit"  frameborder="0" style="border:0; height:100%; width:100%; position:absolute; " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
</div>
<div class="info">
    <div class="info_item"> <img  src="{{ asset('css/image/posizione.png') }}"><p> Saint, Canaries, Saint Lucia </a></p></div>
    <div class="info_item"> <img src="{{ asset('css/image/email.png') }}"> <p> <a href="mailto:wlcctechnology@gmail.com">wlcctechnology@gmail.com</a></p></div>
    <div class="info_item"> <img  src="{{ asset('css/image/telefono.jpg') }}"><p> +1 758-714-9568 </p></div>
   
</div>

@endsection
