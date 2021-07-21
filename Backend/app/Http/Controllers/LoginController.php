<?php

namespace App\Http\Controllers;


use App\Models\UserAuthenticationModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    function Login(Request $request){

        $request->validate([
            'email'=>['required','email'],
            'password' => ['required']
        ]);

        Auth::attempt($request->only('email','password'));
        $user = UserAuthenticationModel::where('email',$request['email'])->first();

        if(!$user || !($request['password'] == $user->password)){
            return response()->json(['invalid' => 'The provided credentials are incorrect.'],422);
        }
        else
        return;

    }
    public function Logout()
    {
        # code...
        $user = UserAuthenticationModel::where('email',Auth::user()->email)->first();
        $user->tokens()->delete();
        Auth::logout();
    
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
    }
}
