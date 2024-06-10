@extends('master')

@section('konten')
    @if($posts->isNotEmpty())
        @foreach ($posts as $post)
            <div class="post-list">
                
                <p>{{ $post->judul }}</p>
                <p>{{ $post->penulis }}</p>
                <p>{{ $post->penerbit }}</p>
                <p>{{ $post->deskripsi }}</p>
                <p>{{ $post->stok }}</p>
                
            </div>
        @endforeach
    @else 
        <div>
            <h2>No books found</h2>
        </div>
    @endif
@endsection
