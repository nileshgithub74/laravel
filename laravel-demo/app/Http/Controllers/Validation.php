<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validation extends Controller
{
    public function getVal(Request $req)
    {
    
        $validated = $req->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'city'  => 'required',
        ]);

        
        return $validated;
    }
}
