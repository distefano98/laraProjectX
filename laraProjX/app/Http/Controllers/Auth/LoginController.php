<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * Define homepage for different users
     * @var string
     */
    protected function redirectTo() {
        $ruolo = auth()->user()->ruolo;
        switch($ruolo){
            case 'user' : return '/user';
               
            case 'admin': return '/admin';
                
            case 'staff': return '/staff';
                
            default : return '/';
        }
    }

    /**
     * override del metodo che definisce quale elemento va ad identificare 
     * l'username dell'utente (poicchè di default sarebbe l'email)
     * 
     */
    
    public function username() {
        return 'username';
        
    }
    
    
    
    
    
    
    /**
     * Create a new controller instance.
     * @return void
     * 
     * definisce chi puo attivare queste funzioni
     * quindi dall'utente guest perchè siamo in fase di registrazione
     * attraverso il method chaining concateniamo all'attivazione del middleware 
     * con il parametro guest anche il metodo except con parametro logout in modo 
     * tale che possa essere usato da qualcunque utente
     * 
     */
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
