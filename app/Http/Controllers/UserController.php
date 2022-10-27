<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginCreate(){
        return view('auth.registrar');
    }


    public function create(Request $request){
        
        if(!empty($request->all())){
            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            $user->save();

            dd('Cadastrado com sucesso!');
        }else{
            dd('Não foi possivel cadastrar.');
        }

    }
}
