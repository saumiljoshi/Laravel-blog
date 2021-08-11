<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
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
//Route::get('/', function () {
  //  return view('welcome');
//});


//Session with login;
Route::get('login',[AuthController::class,'login']);

//session with user login;
Route::post('/session',[AuthController::class,'Session']);
Route::get('/logout',[AuthController::class,'logout']);

//session with user register;
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'create']);

//home file;
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[PostController::class,'index']);


Route::middleware(['auth'])->group(function()
{
    Route::resource('post',PostController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('comment',CommentController::class);
    Route::get('comment/create/{create}',[CommentController::class,'create']);
    Route::get('user/{users}/posts',[AuthController::class,'profile']);
    Route::get('/posts/{id}',[AuthController::class,'posts']); 
});


