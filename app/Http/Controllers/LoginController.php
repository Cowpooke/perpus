<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request){
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            return view('dashboard');
        } else {
            $request->session()->flash('error', 'Email atau password salah');
            return view('login');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return view('/');
    }
}
