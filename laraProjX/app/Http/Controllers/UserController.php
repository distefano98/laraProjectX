<?php

namespace App\Http\Controllers;
use App\Models\Resources\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
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
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
         
        dd('Modifica Password avvenuta con successo');
        return redirect()->action('UserController@index');
    }
}

