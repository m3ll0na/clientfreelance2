<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\FreelancerSlotController;
use App\Http\Controllers\FreelancerSkillController;

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

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/', function () {
    return view('landingpage');
});

//this is for booking form - weekly view.

Route::get('/test', function () {
    return view('test');
});


//freelancerskill
Route::get('/freelancerskill',[FreelancerSkillController::class,'index'])->name('freelancerskill');
Route::get('/freelancerskill/search',[FreelancerSkillController::class,'search'])->name('freelancerskill');

//freelancer
Route::get('/freelancer',[FreelancerController::class,'index'])->name('freelancer');
Route::get('/freelancer/{id}',[FreelancerController::class,'show'])->name('freelancerInfo');

//freelancerslot
Route::get('/freelancerslot',[FreelancerSlotController::class,'index'])->name('freelancerslot');

//bookingsuccess

//client
Route::get('/client',[ClientController::class,'index'])->name('client');
Route::get('/createclient',[ClientController::class,'create']);
Route::post('/insertclient',[ClientController::class,'store']);
Route::get('/editclient/{id}',[ClientController::class,'edit']);
Route::post('/updateclient/{id}',[ClientController::class,'update']);
Route::get('/deleteclient/{id}',[ClientController::class,'destroy']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index']);