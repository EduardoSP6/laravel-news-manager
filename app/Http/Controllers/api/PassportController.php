<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    /*
        Metodo de login: autentica o usuario e retorna o access token
    */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user  = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;
            return response()->json(['token' => $token]);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
}
