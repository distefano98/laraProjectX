<?php

namespace App\Http\Controllers;
use App\Models\Resources\User;
use Illuminate\Http\Request;
use App\Http\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user');
    }
    
       public function changePassword()
    {
        return view('user.updatePassword');
    } 
    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
        
        return redirect()->action('UserController@index');
               
    }
    
      public function changeInfo()
    {
        return view('user.updateInfo');
    } 
    public function storeInfo(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'residenza' => ['required', 'string', 'max:255'],
            'occupazione' => ['required', 'string', 'max:255'],
        ]);
        if (!(User::find(auth()->user()->id)->email == $request->email )) {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        }
        else {
            $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        }
        
        User::find(auth()->user()->id)->update([
            'nome'=> $request->nome,
             'cognome'=> $request->cognome,
             'email'=> $request->email,
             'residenza'=> $request->residenza,
             'occupazione'=> $request->occupazione,
                ]);
        
        return redirect()->action('UserController@index');
    }

}