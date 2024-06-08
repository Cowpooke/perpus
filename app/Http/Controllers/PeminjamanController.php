<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function peminjaman(){
        //ambil data
        $peminjaman = DB::table('peminjaman')->get();

        //mengirim data ke index
        return view('peminjaman',['peminjaman',$peminjaman]);

    }
    
}
