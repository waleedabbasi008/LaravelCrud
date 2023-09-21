<?php
// use App\Http\Controllers\MemberController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them wil 
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return
        view('home');
});
// *************************************************** Customer controllers crud operations start *******************

//Routes for deleting the  lists

Route::get('list', [CustomerController::class, 'list']);
Route::get('delete/{id}', [CustomerController::class, 'delete']); //we will acces id inside 

//Route for editing the data 

Route::get('edit/{id}', [CustomerController::class, 'showData']); //we will acces id inside 
Route::post('edit', [CustomerController::class, 'update']); //we will acces id inside 



//Route for Add customer to the database
Route::view('add', 'AddMember'); //route for the form
Route::post('add', [CustomerController::class, 'addData']);
// *************************************************** Customer controllers crud operations ends *******************


