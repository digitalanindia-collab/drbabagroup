<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\PlanController;
use App\Http\Controllers\frontend\HomeController;

Route::get('/', function () {
    return view('frontend/index');
});
// Route::get('/signup',[AuthController::class,'signup']);
Route::get('/admin',[AuthController::class,'admin_login'])->name("login");
Route::post('/admin',[AuthController::class,'admin_post_login']);

Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/admin/dashboard',[AuthController::class,'dashboard']);
Route::get('/admin/logout',[AuthController::class,'logout']);
Route::resource('/admin/plan',PlanController::class);
 });

//Customer

Route::get('/signup',[HomeController::class,'signup']);
Route::post('/signup',[HomeController::class,'signup_post']);
Route::get('/login',[HomeController::class,'login']);
Route::post('/login',[HomeController::class,'login_post']);

Route::get('/about-us',[HomeController::class,'aboutus']);
Route::get('/contact-us',[HomeController::class,'contactus']);
Route::get('/plan',[HomeController::class,'plan']);

Route::middleware(['auth', 'customer'])->group(function () {
Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::get('/rank',[HomeController::class,'view_rank'])->name("rank");
Route::get('/logout',[HomeController::class,'logout']);
 });


Route::get('/fallback',[HomeController::class,'fallback']);


