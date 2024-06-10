<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

Route::get('/', function(){
    if (Auth::check()) {
        return view('dashboard');
    } else {
        return view('landing');
    }
});

/*route::get('peminjaman',function(){
    $peminjaman = DB::table('peminjaman')->get();

    return view('peminjaman',['peminjaman'=> $peminjaman]);
});*/

route::get('peminjaman',[PeminjamanController::class,'getData'])->name('peminjaman');

/*Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');*/
Route::get('search', [SearchController::class,'search'])->name('search');

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('dashboard',[HomeController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');