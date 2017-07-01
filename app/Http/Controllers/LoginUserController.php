<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginUserController extends Controller
{
    public function login_user()
    {
        return view('admin.layout.login');
    }
    public function user_login(Request $request)
    {
     $user=Sentinel::authenticateAndRemember($request->all());


     return redirect("dashboard");
    }
}
