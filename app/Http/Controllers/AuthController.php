<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
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
    
      
      
      public function Validator(array $data)
      {
    
          return Validator::make($data, [
             'name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'password' => ['required','min:8', 'confirmed'],
             'phone_no' => ['required', 'numeric', 'min:10', 'confirmed'],
             'address' => ['required', 'string','confirmed'],
             'city' => ['required', 'string','confirmed'],
             'state' => ['required', 'string','confirmed'],
             'Zip' => ['required', 'string', 'confirmed'],
            ]);
    
      }
      public function register(){
        return view('auth/register');
      }
      public function create(Request $request)
      {
           $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'phone_no' => $request['phone_no'],
            'address' => $request['address'],
            'city' => $request['city'],
            'state' => $request['state'],
            'Zip' => $request['Zip'], 
          ]);
           Auth::login($user);
           return redirect('/index');
    
      }
        public function logout()
          {
              Auth::logout();
              return redirect('/register');
         }
}
