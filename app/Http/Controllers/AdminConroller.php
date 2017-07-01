<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminConroller extends Controller
{
    public function dashboard(){
     return view('admin.dashboard');
    }
    public function guest(){
        return view('admin.guest');
    }
}
