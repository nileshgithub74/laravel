<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function ProfileUser(){
        return view('profile');
    }

    public function UserName($name,$regId){


        return view('profile', ['name'=>$name, 'regId'=>$regId]);
    }
}
