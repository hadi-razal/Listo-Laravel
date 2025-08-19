<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function login(Request $request){

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){

            $user = Auth::user();

            $token = $user->createToken('Token')->accessToken;

            return response()->json(['message' => 'Login successful','token' => $token, "userDetails" => $user], 200);
        
        }

        return response()->json(['message' => 'Error while logging in'], 202);

    }
}
