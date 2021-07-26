<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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
Route::get('login',[AuthController::class,'login']);
Route::post('/session',[AuthController::class,'Session']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'create']);
//Route::get('/home',[HomeController::class,'GetData'])->name('home');
Route::view('post','post');



//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/', [PostController::class,'index']);
Route::get('/home', [PostController::class,'index'])->name('home');
Route::middleware(['auth'])->group(function(){
    Route::get('new-post',[PostController::class,'create']);
    Route::post('new-post',[PostController::class,'store']);
    Route::get('index',[PostController::class,'post']);
    Route::get('posts/edit/{edit}',[PostController::class,'edit']);
    Route::post('/update',[PostController::class,'update']);
    Route::get('posts/delete/{delete}',[PostController::class,'destroy']);
    Route::get('comment/create/{id}',[CommentController::class,'create']);
    Route::post('/add',[CommentController::class,'store']);
});


