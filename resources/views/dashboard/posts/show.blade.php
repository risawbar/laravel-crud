@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-9 my-4">
            <a href="/dashboard/posts" class="btn btn-primary mb-4" ><span data-feather="arrow-left" class="mb-1"></span>Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-4" ><span data-feather="edit" class="mb-1"></span>Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-4 borded-0" title="Delete" onclick="return confirm('Hapus Postingan?')"><span data-feather="trash-2" class="mb-1"></span>Delete</button>
                </form>
            <h2 class="mb-3">{{ $post->title }}</h2>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://picsum.photos/1200/400" class="card-img-top" alt="gambar">
            @endif
            <p class="mt-3">{!! $post->body !!}</p>
        </div>

    </div>
</div>

@endsection