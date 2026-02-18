<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\frontend\HomeController;

Route::get('/', function () {
    return view('index');
});
// Route::get('/signup',[AuthController::class,'signup']);
Route::get('/admin',[AuthController::class,'admin_login']);
Route::post('/admin',[AuthController::class,'admin_post_login']);
Route::get('/admin/dashboard',[AuthController::class,'dashboard']);
Route::get('/logout',[AuthController::class,'logout']);

//Customer

Route::get('/signup',[HomeController::class,'signup']);
Route::post('/signup',[HomeController::class,'signup_post']);
Route::get('/login',[HomeController::class,'login']);
Route::post('/login',[HomeController::class,'login_post']);

Route::get('/about-us',[HomeController::class,'aboutus']);
Route::get('/contact-us',[HomeController::class,'contactus']);
Route::get('/fallback',[HomeController::class,'fallback']);
Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::resource('/admin/plan',PlanController::class);

