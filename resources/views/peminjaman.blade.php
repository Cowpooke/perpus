
@extends('master')

@section('konten')
    <h2>
        status peminjaman : 
        @if ($status = 'pending')
        @endif
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th><strong>No</strong></th>
                <th><strong>id buku</strong></th>
                <th><strong>judul buku</strong></th>
                <th><strong>tanggal peminjaman</strong></th>
                <th><strong>tanggal kembali</strong></th>
                <th><strong>denda</strong></th>
            </tr>
            </thead>
            <tbody>
                @foreach($peminjaman as $p)
                <tr>
                    <td></td>
                    <td>{{ $p->id_buku }}</td>
                    <td></td>
                    <td>{{ $p->tgl_pinjam }}</td>
                    <td>{{ $p->tgl_kembali }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

