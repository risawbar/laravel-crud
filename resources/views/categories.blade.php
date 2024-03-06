
@extends('layouts/main')
@section('container')
<h1>{{ $title }}</h1>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mt-4">
            <a href="/posts?category={{ $category->slug }}">
            <div class="card text-bg-dark">
                <img src="https://picsum.photos/500/500" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title flex-fill text-center p-2 fs-4" style="background-color: rgba(0, 0, 0, 0.6)">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection()