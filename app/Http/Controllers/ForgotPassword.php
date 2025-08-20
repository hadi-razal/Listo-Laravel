<?php 


namespace App/http/controllers;

use App/illustrate/Auth;
use illustrate/http/Request


class ForgotPasswordController{


    public function index(Request $request){
        return view('auth.forgotPassword')
    }

    public function resetpassword(Request $request){

      
    }


}