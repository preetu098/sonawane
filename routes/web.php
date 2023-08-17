<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PartnerController;


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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Route::get('/',[IndexPageController::class,'index']);

Route::get('/about',function(){
    return view('client/about');
});

Route::get('/careers',[JobController::class,'getRecord']);

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

Route::get('/showUpdate',[ConstructionController::class,'showUpdate']);


Route::get('/property',function(){ return view('admin/property-create');});

Route::post('/property-add',[PropertyController::class,'addProperty']);

Route::get('/logout',[LoginController::class,'logout']);
Route::get('/admin',[DashboardContoller::class,'getAdminData']);
Route::post('/addAdmin',[DashboardContoller::class,'addAdmin']);

Route::get('/construction_update',function(){
    return view('admin/construction-update');
});
Route::post('/constructiondata',[ConstructionController::class,'addConstruction']);

Route::post('/contactsave',[ContactFormController::class,'addContact']);
Route::post('/referalForm',[ContactFormController::class,'referalContactForm']);
Route::post('/careerAdd',[ContactFormController::class,'careerAdd']);


Route::post('/hificontact',[ContactFormController::class,'addContacthifi']);
Route::post('/addContactkrishna',[ContactFormController::class,'addContactkrishna']);
Route::post('/addContactgoldClass',[ContactFormController::class,'addContactgoldClass']);
Route::get('/hifi',function(){
    return view('client/hifi');
});
Route::get('/krishna',function(){
    return view('client/krishna');
});

Route::get('/goldclass',function(){
    return view('client/goldclass');
});

Route::get('/thank-you',function(){
    return view('client/thank-you');
});


Route::get('/editconst/{id}',[DashboardContoller::class,'editConstruction']);
Route::post('/edit',[DashboardContoller::class,'updateConstruction']);
Route::get('/admincontact',[DashboardContoller::class,'contacts']);

Route::post('/addLead',[LeadController::class,'addLead']);
Route::get('/getLead',[DashboardContoller::class,'getLead']);

Route::get('/deleteConstruction/{id}',[DashboardContoller::class,'deleteConstruction']);

// newsletter
Route::post('/newsletter',[NewsletterController::class,'addNewsLetter']);
Route::get('/getnewsletter',[NewsletterController::class,'getNewsletters']);

//end newsletter

Route::get('/careersReport',[ContactFormController::class,'getCareers']);


Route::get('/job',function(){
    return view('admin/job');
});

Route::post('/jobAdd',[JobController::class,'addModel']);


Route::get('/showJobs',[JobController::class,'showJobs']);

Route::get('/deleteJob/{id}',[JobController::class,'deleteJob']);

Route::get('/editjob/{id}',[JobController::class,'editjob']);


Route::post('/editJobData',[JobController::class,'editjobData']);

Route::post('/addpartner',[PartnerController::class,'addPartner']);

Route::get('/getPartner',[PartnerController::class,'getPartner']);


Route::get('/deletepartner/{id}',[PartnerController::class,'deletepartner']);


// Route::get('/sendMail',function(){
//     $data=array("name"=>"Pratibha Rajawat");
//     Mail::send('email',$data,function($message){
//         $message->to('preetu098@gmail.com')->subject('helllllllo');
//     });
// });