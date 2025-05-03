<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function add(){
        return "students added";
    }
    function  remove(){
        return "students  remove";
    }

    function updated(){
        return "students updated";
    }
    function about($name){
        return  $name;
    }
}
