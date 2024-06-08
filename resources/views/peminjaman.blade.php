
@extends('master')

@section('konten')
    <h2>
          
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th><strong>No</strong></th>
                <th><strong>id buku</strong></th>
                <th><strong>judul buku</strong></th>
                <th><strong>tanggal peminjaman</strong></th>
                <th><strong>tanggal pengembalian</strong></th>
                <th><strong>tanggal dikembalikan</strong></th>
                <th><strong>denda</strong></th>
                <th><strong>status</strong></th>
            </tr>
            </thead>
            <tbody>
                @foreach($peminjaman as $p)
                <tr>
                    <td></td>
                    <td>{{ $p->idbuku }}</td>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->tgl_pinjam }}</td>
                    <td>{{ $p->tgl_kembali }}</td>
                    <td></td>
                    <td>denda</td>
                    <td>{{ $p->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

