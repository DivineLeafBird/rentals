<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// userpage routes

Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/logout',[HomeController::class,'logout']);
Route::get('/category',[HomeController::class,'category']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/community',[HomeController::class,'community']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);

Route::get('/blogstory',[HomeController::class,'blogstory']);
Route::get('/communityreplies',[HomeController::class,'communityreplies']);



// adminpage routes
Route::get('/redirect',[AdminController::class,'redirect']);
Route::get('/admlogout',[AdminController::class,'admlogout']);
Route::get('/view_home',[AdminController::class,'view_home']);
Route::get('/view_category',[AdminController::class,'view_category']);
Route::get('/view_blog',[AdminController::class,'view_blog']);
Route::get('/view_community',[AdminController::class,'view_community']);
Route::get('/view_about',[AdminController::class,'view_about']);
Route::get('/view_contact',[AdminController::class,'view_contact']);


