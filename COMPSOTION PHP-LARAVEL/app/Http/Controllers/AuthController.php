<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function get_login(){
        return view('Auth.login');
    }

    public function login(LoginRequest $loginRequest){
        $access = $loginRequest->only('email', 'password');

        if(Auth::attempt($access)){
            return redirect()->route('home');
        }

        return back();
    }

    public function get_register(){
        return view('Auth.register');
    }

    public function register(RegisterRequest $registerRequest){

        User::create([
            'nom' => $registerRequest->nom,
            'prenom' => $registerRequest->prenom,
            'email' => $registerRequest->email,
            'password' => Hash::make($registerRequest->password),
            'avatar' => $registerRequest->avatar
        ]);

        return redirect()->route('get-login');

    }
}
