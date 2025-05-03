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


// Route::get('/validation', function(){
//     return view('validation');
// });


// use  App\Http\Controllers\Validation ;

// Route::post('submit', [Validation::class, 'getVal']);


// Route::view('/' , 'welcome');
// Route::view('/home', 'home');
// Route::view('/about', 'about');


// Route::view('profile/user/nilesh', 'about')->name('hm');  // name Routes




// --------------------------------------------group routes by prefix------------------------------------------------

use App\Http\Controllers\PrefixController ;

// Route::view('/routes','prefixRoutes');
// Route::get('/add',[PrefixController ::class , 'add']); 
// Route::get('/add',[PrefixController ::class , 'remove']); 

// ---------------------------------------Gorup routes using prefix-------------------------------------------------------------------------------
// Route::prefix('students')->group(function(){
    
// Route::view('/routes','prefixRoutes');
// Route::get('/add',[PrefixController ::class , 'add']); 
// Route::get('/remove',[PrefixController ::class , 'remove']);


// });



///---------------------------------------Group routes with Controoller-----------------------------------------------
// use App\Http\Controllers\StudentController;

// Route::controller(StudentController::class)->group(function(){
//     Route::get('/add', 'add');
//     Route::get('/remove', 'remove');
//     Route::get('/about/{name}', 'about');
// });