<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources\User; 
use App\Models\Admin;
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
       
       return view('admin.editStaff')
         ->with('users' , $user);
     
        
    }
    
    public function deleteStaff() {}

    public function insertStaff(){}
    
    public function editStaff (){}



    //utente


    public function showUser() {

       $user = User::where('ruolo', 'user' )->get();
       
       return view('admin.editUser')
         ->with('users' , $user);
     
        
    }
    
    
    public function deleteUser(){
        
        
    }
    
    
}
