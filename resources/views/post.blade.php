
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row  justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. 
                    <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}
                    </a> In 
                    <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}
                    </a>
                </p>

                {{-- Menampilkan image --}}
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                    </div>
        
                @else
            
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
        
                @endif

                {{-- tidak melakukan exscaping ada html didalam --}}
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="mt-5 d-block">Back To Post</a>
            </div>
        </div>
    </div>

    @endsection