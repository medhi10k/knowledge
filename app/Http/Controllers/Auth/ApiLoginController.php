<?php

namespace App\Http\Controllers\Auth;

use JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exception\JWTException;

class ApiLoginController extends Controller
{
    //

    public function authenticate()
    {
        $credentials = request()->only('email', 'password');

        try {
            $token = JWTAuth::attempt($credentials);

            if(!$token) {
                return response()->json(['error' => 'invalid token'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'something_wrong'], 500);
        }

        return response()->json(['token' => $token], 200);
    }

    public function register()
    {
        $email = request()->email;
        $password = request()->password;
    }
}
