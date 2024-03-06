@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-3">
            <h2>{{ $post->title }}</h2>
            <p>By <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none"> {{ $post->user->name }} </a> in
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if ($post->image)
                    <div style="max-height: 300px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    </div>
                    @else
                    <img src="https://picsum.photos/200/90" class="card-img-top" alt="{{ $post->category->name }}">
            @endif

            <p>{!! $post->body !!}</p>
            <a href="/posts">Back to Post</a>

        </div>
    </div>
</div>


@endsection()