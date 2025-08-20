<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController
{

    public function index(Request $request){
        return view('auth.register')
    }


    public function register(Request $request){

        $request->validate([
            'email'=>['required','email'],
            'password'=>['required','min:8'],
            'Name'=>['required','min:3'],
        ]);

        $user = User::create([
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'name'=>$request->Name,
        ]);

        return view('login', ['message' => 'Registration successful. Please log in.',"userDetails" => $user ]);



    }
}
