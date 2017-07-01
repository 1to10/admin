<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class UserRegisterController extends Controller
{
   public function create_user()
   {
       return view('admin.create_user');
   }
   public function post_user(Request $fromForm)
   {
       $user=Sentinel::RegisterAndActivate($fromForm->all());
       return("Post user has Been Inserted Succesfully");

   }
}
