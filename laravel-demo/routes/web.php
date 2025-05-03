<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FormController;



// Route::get('/user', function(){
//     return view('user-form');
// });

// Route::post('adduser', [FormController::class, 'Adduser']);

// use App\Http\Controllers\FormValidationController;

// Route::get('/forms', function(){
//     return view('formHandling');
// });

// Route::post('userAdd', [FormValidationController::class, "AddNewUser"]);


Route::get('/validation', function(){
    return view('validation');
});


use  App\Http\Controllers\Validation ;

Route::post('submit', [Validation::class, 'getVal']);