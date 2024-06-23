<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class AuthController extends Controller
{
   
   public function register(){

    return view('auths.register');
   }
   
   public function save_register(Request $request){

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',

    ]);

    $user=User::create($request->all());

    auth()->login($user);
    return redirect('idees.affiche_idee');

   }
   
    public function login(){

        return view('auths.login');
    }

    public function authentification(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);

        if (auth()->attempt($request->only('email','password'))){

            return redirect('affiche_idee');
        }

        return redirect()->back();
    }

    public function logout(){

       auth()->logout();

       return redirect('login');
    }
}
