<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
 function getData(){
//   return DB::select("select * from blog");
return Customer::all();

    // ... do something with the $users

    
 }
}
