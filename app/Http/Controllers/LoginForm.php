<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginForm extends Controller
{
    // 
    function userLogin(Request $req)
    { 
      $userdata = $req->input('user');
      $password = $req->input('password');
      $req->session()->put('user', $userdata);
      $req->session()->put('password', $password);
      return redirect('Profile');
    }
}
