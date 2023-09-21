<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    function showData()
    {
        $data = Customer::all();
        return view('list', ['members' => $data]);

    }

}