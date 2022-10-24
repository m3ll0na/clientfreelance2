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

Route::get('/', function () {
    return view('welcome');
});



//client
Route::get('/client',[ClientController::class,'index'])->name('client');
Route::get('/createclient',[ClientController::class,'create']);
Route::post('/insertclient',[ClientController::class,'store']);
Route::get('/editclient/{id}',[ClientController::class,'edit']);
Route::post('/updateclient/{id}',[ClientController::class,'update']);
Route::get('/deleteclient/{id}',[ClientController::class,'destroy']);

//freelancer
Route::get('/freelancer',[FreelancerController::class,'index'])->name('freelancer');
Route::get('/createfreelancer',[FreelancerController::class,'create']);
Route::post('/insertfreelancer',[FreelancerController::class,'store']);
Route::get('/editfreelancer/{id}',[FreelancerController::class,'edit']);
Route::post('/updatefreelancer/{id}',[FreelancerController::class,'update']);
Route::get('/deletefreelancer/{id}',[FreelancerController::class,'destroy']);

//freelancerslot
Route::get('/freelancerslot',[FreelancerSlotController::class,'index'])->name('freelancerslot');
Route::get('/createfreelancerslot',[FreelancerSlotController::class,'create']);
Route::post('/insertfreelancerslot',[FreelancerSlotController::class,'store']);
Route::get('/editfreelancerslot/{id}',[FreelancerSlotController::class,'edit']);
Route::post('/updatefreelancerslot/{id}',[FreelancerSlotController::class,'update']);
Route::get('/deletefreelancerslot/{id}',[FreelancerSlotController::class,'destroy']);

//freelancerskill
Route::get('/freelancerskill',[FreelancerSkillController::class,'index'])->name('freelancerskill');
Route::get('/createfreelancerskill',[FreelancerSkillController::class,'create']);
Route::post('/insertfreelancerskill',[FreelancerSkillController::class,'store']);
Route::get('/editfreelancerskill/{id}',[FreelancerSkillController::class,'edit']);
Route::post('/updatefreelancerskill/{id}',[FreelancerSkillController::class,'update']);
Route::get('/deletefreelancerskill/{id}',[FreelancerSkillController::class,'destroy']);

//skill
Route::get('/skill',[SkillController::class,'index'])->name('skill');
Route::get('/createskill',[SkillController::class,'create']);
Route::post('/insertskill',[SkillController::class,'store']);
Route::get('/editskill/{id}',[SkillController::class,'edit']);
Route::post('/updateskill/{id}',[SkillController::class,'update']);
Route::get('/deleteskill/{id}',[SkillController::class,'destroy']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index']);