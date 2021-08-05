<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct(){

   // $this->middleware('auth');
  }
  public function index()
  {
    $post = Post::all();
    $user = Auth::user();
    return view('home',compact('post', 'user'));
        
  }    
}
