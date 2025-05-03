<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function Adduser(Request   $request){
        echo "Username  :  {$request->name} <br>";
        echo "Email   :  {$request->email} <br>";

         

    }
}
