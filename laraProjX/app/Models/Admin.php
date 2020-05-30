<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;
use App\Models\Resources\User;
use App\Models\Staff;

class Admin {
    
    public function getId($id){
        
       return User::whereIn('id', $id)->get()->first();
    }
}