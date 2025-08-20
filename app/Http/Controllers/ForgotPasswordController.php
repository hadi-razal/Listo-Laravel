<?php 


namespace App\http\controllers;

use App\illustrate\Auth;
use Illuminate\Http\Request;



class forgotPasswordController
{


    public function index(Request $request){
        return view('auth.forgotPassword');
    }

    public function resetpassword(Request $request){

      
    }

}