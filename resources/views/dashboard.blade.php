
@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->username}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
  <p>Cari Data Buku :</p>
    <form class="d-flex ms-2" action="{{ route('search') }}" method="GET">
      <input type="text" name="search" required placeholder="cari buku"/>
      <button type="submit">Search</button>
    </form>
    aaaaaaaaaaaaa
  <h2>
    <a href="peminjaman">Peminjaman</a>
  </h2>
@endsection