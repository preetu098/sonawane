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

Route::get('/',function(){
    return view("client/index");
});

Route::get('/about',function(){
    return view('client/about');
});

Route::get('/carrer',function(){
    return view('client/carrers');
});

Route::get('/partner',function(){
    return view('client/partner');
});
Route::get('/referal',function(){
    return view('client/referal');
});
Route::get('/contact',function(){
    return view("client/contact");
});