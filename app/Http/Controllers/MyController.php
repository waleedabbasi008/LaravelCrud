<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;

    class MyController extends Controller0
    {
        function index(){
        return Http::get("https://dummyjson.com/products/categories");
        }
        //
    }
