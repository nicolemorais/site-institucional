<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
   public function index(){
    return view('auth.login');
   }

   public function auth(Request $request){
      $data = $request->all();
      $remember = isset($data['lembrar']) ? true : false;

      if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
         return redirect('/login');
      }else{
         return redirect('/private-login');
      }
   }

      public function logout(){
         Auth::logout();
      }


}