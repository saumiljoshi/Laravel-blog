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
    //
    public function login(){
      return view('Auth/login');
    }
    public function Session(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
          return redirect('/index');
    
        }
        else
        {
          return response()->json([
            'message' => 'invalid credentials'
          ],401);
        }
      }
    
      
  public function register(){
        return view('auth/register');
      }
      public function create(User_request $request)
      {
         $data=$request->validated();
         
           $user = User::create($data);
           Auth::login($user);
           return redirect('/index');
    
      }
        public function logout()
          {
              Auth::logout();
              return redirect('/register');
         }
}
