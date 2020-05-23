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
            
            
            <div class="cover_card">
                <section class="card" id="card1"><p> <b> CENTINAIA DI PRODOTTI </b></p></section>
                <section class="card" id="card2"><p><b>ACCEDI O REGISTRATI PER I NOSTRI SCONTI</b></p> </section>
                <section class="card" id="card3"><p><b>IL NOSTRO TEAM A TUA DISPOSIZIONE</b></p></section>
    
            </div>
            
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