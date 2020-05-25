<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('staff');
    }
}
