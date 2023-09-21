<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function admin($name){
   $names = ['waleed abbasi', 'usman', 'majid'];
        return view('name', ['name' => $names ]);
    }
}
