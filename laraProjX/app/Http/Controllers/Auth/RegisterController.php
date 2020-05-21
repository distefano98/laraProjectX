<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Resources\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    | 
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration (Homepage).
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     * Constructor defines a "guest" parameter, associated with unregistered users
     * it is set up only when an unregistered user make a request
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     * 
     * required indica che il campo è obbligatorio 
     * confirmed campo conferma pw 
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'residenza' => ['required', 'string', 'max:255'],
            'occupazione' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
                        
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Resources\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['nome'],
            'cognome' => $data['cognome'],
            'email' => $data['email'],
            'residenza' => $data['residenza'],
            'occupazione' => $data['occupazione'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
