<?php 


namespace App\http\controllers;

use App\illustrate\Auth;
use Illuminate\Http\Request;



class forgotPasswordController
{

    public function index(Request $request){
        return view('auth.forgotPassword');
    }

    public function resetpasswordrequest(Request $request){

       $request->validate([
        "email":"required|email"
       ]);
       

      $status = Password::sendResendLink({
        only->('email')
       })

       return $status

        
    }

}