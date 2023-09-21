<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
  // Showing the list or fetching the list data from the database

  function list()
  {
    $data = Customer::all();
    return view('list', ['members' => $data]);


  }
  //Adding the data from list to the database
  function addData(Request $req)
  {
    $customer = new Customer;
    $customer->id = $req->id;
    $customer->name = $req->name;
    $customer->email = $req->email;
    $customer->address = $req->address;
    $customer->save();
    return redirect('add');
  }
  //deleting the data from the database
  function delete($id)
  {
    $data = Customer::find($id);
    $data->delete();
    return redirect('list');
  }

  //getting the data to update
  function showData($id)
  {
    $data = Customer::find($id);
    return view('edit', ["data" => $data]); //edit will be the blade file name 
  }
  //Updating the data
  public function update(Request $req)
  {
    $data = Customer::find($req->id);
    if ($data) {

      $data->name = $req->name;
      $data->email = $req->email;
      $data->address = $req->address;
      $data->save();
      return redirect('list');
    } else {
      // Handle the case where the object is not found
      return redirect()->back()->with('error', 'Record not found');
    }

  }
}