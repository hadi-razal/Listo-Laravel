<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;

class ForgotPasswordController
{
    public function index(Request $request)
    {
        return view('auth.forgotPassword');
    }

    public function resetPasswordRequest(Request $request)
    {
        $request->validate([
            "email" => "required|email"
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status;
    }
}
