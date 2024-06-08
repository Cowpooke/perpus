
@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
  <h2>
    <a href="/peminjaman">peminjaman</a>
  </h2>
@endsection