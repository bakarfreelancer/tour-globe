<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginGet(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=>'required'
        ]);


        if(Auth::attempt($credentials)){
            // Login successfully
            switch(auth()->user()->role){
                case "admin":
                    return redirect()->route('dashboard');
                    break;
                default:
                    return redirect()->route('home');
            }
        }else {
            // Authentication failed
            return redirect()->back()->withInput()->withErrors(['login-failed' => 'Invalid email or password']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
