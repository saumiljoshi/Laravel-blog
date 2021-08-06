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
Route::get('home',[PostController::class,'post']);



//Route::get('/', function () {
  //  return view('welcome');
//});

Route::middleware(['auth'])->group(function()
{
    //show user profile;
    Route::get('/index/{posts}', [PostController::class,'index']);
    //category section;
    Route::view('category','category.category');
    Route::post('add/category',[CategoryController::class,'store']);

    //edit category;
    Route::get('category/{edit}',[CategoryController::class,'edit']);

    Route::post('update/{category}',[CategoryController::class,'update']);

    //user-information;
    Route::get('user/{users}/posts',[AuthController::class,'profile']);
    Route::get('/posts/{id}',[AuthController::class,'posts']); 
    //create new post;
    Route::get('new-post',[PostController::class,'create']);
    
    //store new post;
    Route::post('/new-post',[PostController::class,'store']);
    //show all posts;
    Route::get('show',[PostController::class,'show']);
    //edit all posts;
    Route::get('edit/{edit}',[PostController::class,'edit']);
    
    Route::post('update/posts/{id}',[PostController::class,'update']);   
    //remove posts;
    Route::get('/delete/{delete}',[PostController::class,'destroy']);
    
    //comments section
    Route::get('comment/{posts}',[CommentController::class,'create'])->name('comments');
   
    // show comments on posts 
   Route::get('/comment-index',[CommentController::class,'index']);
    
    //add comments section 
    Route::post('add/comments',[CommentController::class,'store']);

    //remove comments section 
    Route::get('comments/{delete}',[CommentController::class,'destroy']);
});


