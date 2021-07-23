<?php

namespace App\Http\Controllers;


use App\Models\User;

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
        $user = User::where('email',$request['email'])->first();

        if(!$user || !($request['password'] == $user->password)){
            return response()->json(['invalid' => 'The provided credentials are incorrect.'],422);
        }
        else{
<<<<<<< HEAD
            $token = $user->createToken('myapptoken')->plainTextToken;

            $response = ["user"=>$user, "token"=>$token];
           
=======
            $response = array(
                'message' => 'Login Succesfully'
            );
>>>>>>> 0e825f2 (Adding Program)
        return $response;
        }
    }
    public function Logout()
    {
        # code...
        $user = User::where('email',Auth::user()->email)->first();
        $user->tokens()->delete();
        Auth::logout();
    
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
    }
}
