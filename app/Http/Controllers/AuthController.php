<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User_request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
 
    public function __construct()
    {
      // $this->middleware('guest');
    }  

    public function login(){
      return view('Auth/login');
    }
    public function Session(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials))
        {
           return redirect('/home');
        }
        else
        {
           return redirect('/home');
        }
          //  return response()->json([
          //   'message' => 'invalid credentials'
          //  ],401);
        // else
        // {
           // return route('home');
        // 
    //if(auth()->check() && auth()->user()->is_admin == 1) 
        //(auth()->user()->is_admin)
       
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
              return redirect('/register');
        }
         
        public function index(){
          $user = User::all();
          return view('/profile',['user'=>$user]);
        }        
}
