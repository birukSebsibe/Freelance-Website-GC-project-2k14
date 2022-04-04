<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Freelancer\FreelancerController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProposalController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('contact', function () {
    return view('public.contact');
});

Route::get('/testimonial', function () {
    return view('public.testimonial');
});

Auth::routes();


Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

Route::prefix('freelancer')->name('freelancer.')->group(function(){

    Route::middleware(['guest:freelancer','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.freelancer.login')->name('login');
         Route::view('/register','dashboard.freelancer.register')->name('register');
         Route::post('/create',[FreelancerController::class,'create'])->name('create');
         Route::post('/check',[FreelancerController::class,'check'])->name('check');
         
    });

    Route::middleware(['auth:freelancer','PreventBackHistory'])->group(function(){
         //Route::view('/home','dashboard.freelancer.home')->name('home');
         Route::post('logout',[FreelancerController::class,'logout'])->name('logout');
         Route::get('/home',[FreelancerController::class,'index'])->name('home');
         Route::get('job-detail/{id}', [JobController::class, 'showToFreelancer'])->name('job');
         Route::get('/apply/{id}',[FreelancerController::class,'apply'])->name('apply');
         Route::post('/submit/{job_id}',[ProposalController::class,'submit'])->name('submit');
    });

});


Route::prefix('client')->name('client.')->group(function(){

    Route::middleware(['guest:client','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.client.login')->name('login');
         Route::view('/register','dashboard.client.register')->name('register');
         Route::post('/create',[ClientController::class,'create'])->name('create');
         Route::post('/check',[ClientController::class,'check'])->name('check');
    });

    Route::middleware(['auth:client','PreventBackHistory'])->group(function(){
         //Route::view('/home','dashboard.client.home')->name('home');
         Route::post('logout',[ClientController::class,'logout'])->name('logout');
         Route::get('/home',[ClientController::class,'index'])->name('home');
    });

});