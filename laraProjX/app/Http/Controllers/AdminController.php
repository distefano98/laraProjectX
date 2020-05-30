<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources\User; 
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\NewStaffRequest;

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
    
    
    
    public function storeNewStaff(NewStaffRequest $request){
        
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
    
    
    
     public function storeUpdateStaff(NewStaffRequest $request , $id) {
         
        
        
        $staff = User::findOrFail($id);
        $staff->fill($request->validated());
        $staff->save();
        
        return response()->json(['redirect' => route('showstaff')]);
}
    
    
    public function deleteStaff() {
       
    }

   
    



    //utente


    public function showUser() {

       $user = User::where('ruolo', 'user' )->get();
       
       return view('admin.showUser')
         ->with('users' , $user);
     
        
    }
    
    
    public function deleteUser(){
        
        
    }
    
    
}
