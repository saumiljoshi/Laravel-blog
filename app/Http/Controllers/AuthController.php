<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User_request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
 
      public function __construct()
      {
      
      }  

      public function login()
      {
          return view('Auth/login');
      }

      public function Session(Request $request)
      {
        $credentials = $request->validate([
          'email' => ['required', 'email'],
          'password' => ['required'],
        ]);
  
        if(Auth::attempt($credentials)) 
        {
          $request->session()->regenerate();

          return redirect('/home');
        }
          
      }

      public function register()
      {
          return view('auth/register');
      }

      public function create(User_request $request)
      {
         $data=$request->validated();
         
           $user = User::create($data);
           Auth::login($user);
           return redirect('/home');
    
      }

      public function logout()
        {
              Auth::logout();
              return redirect('/');
        }
         
      public function index()
        {
          $user = User::all();
          return view('/profile',['user'=>$user]);
        }
        
      public function profile(Request $request,$id)
        {
          
             if(Auth::user()->is_admin())
              {
                $post = Post::all();  
              }
             else
             {
               $post = Post::where('user_id', 'user');    
             }                          
             return view('admin.profile', compact('post'));
        }
        
      public function posts($id)
        {

          $post = Post::all(); 
          $comment = Comment::all(); 
          return view('user.Userprofile',compact('post','comment'));
        }
}