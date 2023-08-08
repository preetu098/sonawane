<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\PropertyController;
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
    return view('client/index');
});

Route::get('/about',function(){
    return view('client/about');
});

Route::get('/careers',function(){
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
Route::get('/completed',function(){
    return view('client/completed');
});
Route::get('/ongoing',function(){
    return view('client/ongoing');
});

Route::get('/terms',function(){
    return view('client/terms-policy');
});

Route::get('/disclaimer',function(){
    return view('client/disclaimer-policy');
});

Route::get('/privacy-policy',function(){
    return view("client/privacy-policy");
});

Route::get('/faq',function(){
    return view('client/faqs');
});


Route::get('/emi',function(){
    return view('client/emi_calcualtor');
});


Route::get('/login',function(){
    return view('login');
});


Route::post('/loginForm',[LoginController::class,'login']);


Route::get('/dashboard',function(){
    return view('admin/index');
});

Route::get('/property',function(){ return view('admin/property-create');});

Route::post('/property-add',[PropertyController::class,'addProperty']);

Route::get('/logout',[LoginController::class,'logout']);
Route::get('/admin',[DashboardContoller::class,'getAdminData']);
Route::post('/addAdmin',[DashboardContoller::class,'addAdmin']);

Route::get('/construction_update',function(){
    return view('admin/construction-update');
});
