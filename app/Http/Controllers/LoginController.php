<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return route('dashboard');
        } else {
            return route('login');
        }
    }

    public function actionlogin(Request $request){
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            return route('dashboard');
        } else {
            $request->session()->flash('error', 'Email atau password salah');
            return route('/');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return route('/');
    }
}
