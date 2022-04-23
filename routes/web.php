<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{title}', function ($title) {
    
//     return view('welcomenew',['abc'=>$title]);
// });

// Route::view('return_view',"1_view");

Route::view('/','index');

