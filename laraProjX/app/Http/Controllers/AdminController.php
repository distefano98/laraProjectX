<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources\User; 
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StaffRequest;


class AdminController extends Controller
{
      protected $__adminModel;
    
      public function __construct() {
        $this->middleware('auth');
        $this->__adminModel = new Admin;
    }

    public function index() {
        return view('admin');
    }
    
    //staff
    
    public function showStaff() {

       $user = User::where('ruolo', 'staff' )->get();
       
       return view('admin.showStaff')
         ->with('users' , $user);
     
        
    }
    
    public function createNewStaff(){
        return view('admin.newStaff');
    }
    
    
    
    public function storeNewStaff(Request $request){
        
        $request->validate(
                [
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:5','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
            ]);
        
        
        
        User::create([
            
             'nome'=> $request->nome,
             'cognome'=> $request->cognome,
             'username'=> $request->username,
             'password'=> Hash::make($request->password),
             'ruolo' => 'staff',
             'email' => '',
             'occupazione' =>'',
             'residenza' => '',
        ]);
        
       return view ('admin');
    }
    
    
    public function updateStaff ($id){
        
        $staff = $this->__adminModel->getId([$id]);
        return view ('admin.updateStaff')
                ->with('user', $staff);
                
        
        
    }
    
    
    
     public function storeUpdateStaff(Request $request , $id) {
        $request->validate(
                [
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
            ]);
         
        $staff = User::findOrFail($id);
        $staff->fill([
             'nome'=> $request->nome,
             'cognome'=> $request->cognome,
             
             'password'=> Hash::make($request->password),
        ]);
        $staff->save();
        
        return response()->json(['redirect' => route('showstaff')]);
}
    
    
    public function deleteStaff($id) {
        
        $staff = User::findOrFail($id);
        $staff->delete();
        
        return response()->json(['redirect' => route('showstaff')]);
    }

   
    



    //utente


    public function showUser() {

       $user = User::where('ruolo', 'user' )->get();
       
       return view('admin.showUser')
         ->with('users' , $user);
     
        
    }
    
    
    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        
        return response()->json(['redirect' => route('showuser')]);
        
    }
    
    
}
