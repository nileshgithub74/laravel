<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    public function AddNewUser(Request $req)
    {
                              
        $gender = $req->input('gender');
        $city = $req->input('city');

        echo "<h2>User Submitted Info</h2>";
        print_r($req->skill);
       
        echo "<strong>Gender:</strong> " . $gender . "<br>";
        echo "<strong>City:</strong> " . $city . "<br>";
    }
}
