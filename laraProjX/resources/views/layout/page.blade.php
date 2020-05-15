<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        
        @yield('head')
        
        <title> WLCC </title>
    </head>
   
    
    
    <body>
        <header class="header" >
            @include('layout/headerPublic')
        </header>
        
        <div class="cover">
           @yield('content')
        </div>
        
        <footer class="footer">
            @include('layout/footer')
            
        </footer>
        
        
        
    </body>
    
    
    
    
</html>