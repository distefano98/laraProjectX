<a href="{{ route('Homepage') }}" class="header__logo" > <img width="250" src="{{ asset('css/image/logo.png') }}">  </a>
    
    <ul class="header__menu">
        @guest
                <li class="header__menu__item"> <a download="RELAZIONE.pdf">RELAZIONE</a> 
                <li class="header__menu__item"> <a href="{{ route('Homepage') }}"> HOME </a></li>
                <li class="header__menu__item"> <a href="{{ route('catalog') }}"> CATALOGO </a></li>
                <li class="header__menu__item"> <a href="{{ route('who') }}"> CHI SIAMO </a></li>
                <li class="header__menu__item"> <a href="{{ route('where') }}"> DOVE SIAMO </a></li>
        @endguest
    
        @can('isUser')
                <li class="header__menu__item"> <a href="{{ route('Homepage') }}"> HOME </a></li>
                <li class="header__menu__item"> <a href="{{ route('catalog') }}"> CATALOGO </a></li>
                <li class="header__menu__item"> <a href="{{ route('who') }}"> CHI SIAMO </a></li>
                <li class="header__menu__item"> <a href="{{ route('where') }}"> DOVE SIAMO </a></li>
                <li class="header__menu__item"> <a href="{{ route('user') }}" > AREA RISERVATA</a></li>
    @endcan
    
    @can('isStaff')
                <li class="header__menu__item"> <a href="{{ route('catalog') }}"> CATALOGO </a></li>
               <li class="header__menu__item"> <a href="{{ route('staff') }}" > AREA RISERVATA</a></li>
    @endcan
    @can('isAdmin')
                <li class="header__menu__item"> <a href="{{ route('catalog') }}"> CATALOGO </a></li>
               <li class="header__menu__item"> <a href="{{ route('admin') }}" > AREA RISERVATA</a></li>
    @endcan
    @auth
               <li class="header__menu__item"><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> LOGOUT </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li class="header__menu__item" ><a href="{{ route('login') }}" > ACCEDI </a></li>  
    @endguest
    </ul>
            
      
        
        