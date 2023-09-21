<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class UploadController extends Controller
    {
        //
        function index(Request $req)
        {
          $req->file('doc')->store('newFolder');
        }     
    }
