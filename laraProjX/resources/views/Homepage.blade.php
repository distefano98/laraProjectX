@extends ('layout.publicPage')
@section ('title',' Home')
 

@section('head')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style_homepage.css') }}" >
        <link href="{{ asset('js/slider.js') }}"  type="text/javascript" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
@endsection

@section ('content')

<div id="wrapper">
            <div class="cover_slider" id="slide">
               
                <img class="cover_slider_item" id="foto1" src="" alt="" />
                <img class="cover_slider_item" id="foto2" src="" alt="" />
                
               
               <p></p>   
            </div>
            
            
              <script src="{{ asset('js/slider.js') }}"> </script>
            <script>$(document).ready(function()
                {     
               slideshow(5,1000,5000);});

            </script>
          
           </div>
            
            
            <section class="home">
     <div class="slider">
         <div class="slide active" style="background-image: url('https://www.pillowservice.it/wp-content/uploads/2019/06/musica-in-ufficio-1.jpg');" >
            <div class="container">
                <div class="caption">
                    <h1>Centinaia di prodotti</h1>
                    <p>Smartphone/Pc/Tablet</p>
                    <a href="catalog">Catalogo</a>
                </div>
            </div>
        </div>
     </div>
                </section>
                <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image: url('https://www.volantinofacile.it/vf/img/sezioni/offertesconti.png'); background-color: #ffffff;">
            <div class="container">
                <div class="caption">
                    <h1>Accedi o registrati</h1>
                    <p>Per te sconti imperdibili! </p>
                    <a href="login">Login</a>
                </div>
            </div>
        </div>
     </div>
                    </section>
                    <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/7/70/Canaries_in_Saint_Lucia_2014.svg')">
            <div class="container">
                <div class="caption">
                    <h1>Vieni a trovarci</h1>
                    <p>Santa Lucia</p>
                    <a href="where">Dove siamo</a>
                </div>
            </div>
        </div>
     </div>
   
  
  </section>

            
            <section  class="descrizione_sito">
                           
                               <h1>WLCC Technology: uno dei migliori negozi di elettronica in Italia</h1>
                           
            <p>
            WLCC non è solo uno dei più grandi negozi italiani di elettronica, smartphone, tablet, computer e molto altro: sul nostro sito potrai trovare il nostro catalogo aggiornato e approfittare di tutte le offerte dedicate ai clienti Registrati online.
            Sullo store potrai trovare moltissime offerte sull’elettronica in continuo aggiornamento per venire incontro alle vostre esigenze.I nostri clienti possono fare shopping in totale sicurezza e comodità.
            Potrete effettuare l’acquisto direttamente da casa vostra infatti effettuando un acquisto online su WLCC Technology avrai a disposizione diverse opzioni: potrai scegliere di ricevere la merce direttamente a casa tua sfruttando la spedizione tramite corriere, oppure optare per il ritiro del tuo ordine presso il 
            punto vendita più vicino a casa tua e in questo caso non pagare nessuna spesa aggiuntiva di consegna.
                     </p>
             </section>

@endsection