<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function getData()
    {
        $user = Auth::user()->username;  
        $peminjaman = DB::table('peminjaman')
        ->join('bukus', 'id', '=', 'bukus.idbuku')
        ->select('bukus.idbuku','bukus.judul', 'peminjaman.tgl_pinjam','peminjaman.tgl_kembali','peminjaman.status')
        ->where('peminjaman.status','=','aktif','AND','peminjaman.user_id','=',$user)
        ->get();
        return view('peminjaman',['peminjaman'=> $peminjaman]);
    }
    
}
