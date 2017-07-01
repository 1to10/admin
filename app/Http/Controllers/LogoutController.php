<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
   public function logout(){
       return view('logout_user');
   }
   public function user_logout(Request $request){
     $user=Sentinel::logout($request->all());
     return redirect('login_user');
   }
}
