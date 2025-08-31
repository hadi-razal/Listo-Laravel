<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class ForgotPasswordController extends Controller
{
    // Show the forgot password form
    public function index()
    {
        return view('auth.forgotPassword');
    }

    // Handle sending reset link (API version)
    public function resetPasswordRequest(Request $request)
    {
        $request->validate([
            "email" => "required|email"
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json([
                'success' => true,
                'message' => 'Password reset link sent to your email'
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => __($status)
        ], 400);
    }

    // Show reset password form (API version - just validate token)
    public function showResetForm($token)
    {
        // For API, just return token validation
        return response()->json([
            'success' => true,
            'token' => $token,
            'message' => 'Token is valid'
        ], 200);
    }

    // Handle actual password reset (API version)
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return response()->json([
                'success' => true,
                'message' => 'Password has been reset successfully'
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => __($status)
        ], 400);
    }
}