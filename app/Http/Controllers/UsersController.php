<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function home() {
        return view('welcome');
    }


    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where(['email' => $request->email, 'password' => $request->password])->first();
        if(!$user){
            return back()->with('message', 'Invalid Credentials');
        }
        $credentials = $request->only('email', 'password');
        auth()->attempt($credentials);
        return to_route('home');
        // return view('authenticate');
    }

    public function register(){
        return view('register');
    }
}
