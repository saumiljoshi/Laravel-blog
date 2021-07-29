<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActionController;
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
//Session with login;
Route::get('login',[AuthController::class,'login']);

//session with user login;
Route::post('/session',[AuthController::class,'Session']);
Route::get('/logout',[AuthController::class,'logout']);

//session with user register;
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'create']);

//home file;
Route::get('/',[HomeController::class,'GetData']);
Route::view('post','post');



//Route::get('/', function () {
   // return view('welcome');
//});


Route::middleware(['auth'])->group(function()
{
    //show user profile;
    Route::get('/index', [PostController::class,'index']);
    Route::get('profile',[AuthController::class,'index']);
     
    //create new post;
    Route::get('new-post',[PostController::class,'create']);
    
    //store new post;
    Route::post('new-post',[PostController::class,'store']);
    //show all posts;
    Route::get('show',[PostController::class,'post']);
    //edit all posts;
    Route::get('posts/edit/{edit}',[PostController::class,'edit']);
    
    Route::post('/update/posts/{post}',[PostController::class,'update']);   
    //remove posts;
    Route::get('posts/delete/{delete}',[PostController::class,'destroy']);
    
    //comments section 
    Route::get('comment/posts/{id}',[CommentController::class,'create']);
    
    // show comments on posts 
    Route::get('comment-index',[CommentController::class,'index']);
    
    //add comments section 
    Route::post('/add/user',[CommentController::class,'store']);

    //remove comments section 
    Route::get('comments/delete/{delete}',[CommentController::class,'destroy']);
});


