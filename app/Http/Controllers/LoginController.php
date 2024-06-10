<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function actionlogin(Request $request){
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            $request->session()->flash('error', 'Email atau password salah');
            return redirect()->route('/');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect()->route('/');
    }
}
