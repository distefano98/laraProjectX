<a href="{{ route('user') }}" class="header__logo" > <img width="250" src="{{ asset('css/image/logo.png') }}">  </a>
   
    <ul class="header__menu">
                <li class="header__menu__item"> <a href="{{ route('user') }}"> HOME </a></li>
                <li class="header__menu__item"> <a href="{{ route('catalog') }}"> CATALOGO </a></li>
                <li class="header__menu__item"> <a href="{{ route('who') }}"> CHI SIAMO </a></li>
                <li class="header__menu__item"> <a href="{{ route('where') }}"> DOVE SIAMO </a></li>
                <li class="header__menu__item"> <a href="{{ route('where') }}"> AREA RISERVATA </a></li>
                
 @auth
        <li class="header__menu__item" ><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
@endauth    
    </ul>