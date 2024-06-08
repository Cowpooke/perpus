<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function getData()
    {
        $peminjaman = DB::table('peminjaman')
        ->join('bukus', 'id', '=', 'bukus.idbuku')
        ->select('bukus.idbuku','bukus.judul', 'peminjaman.tgl_pinjam','peminjaman.tgl_kembali','peminjaman.status')
        ->where('peminjaman.status','=','aktif')
        ->get();
        return view('peminjaman',['peminjaman'=> $peminjaman]);
    }
    
}
