@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div> 
    @endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-4"><span data-feather="plus" class="mb-1"></span>New Post</a>
        <table class="table table-striped table-sm ">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Judul</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>  
          </thead>
          <tbody>
            @foreach ($posts->reverse() as $post)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge btn bg-success" title="Read More"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge btn bg-warning" title="Edit"><span data-feather="edit"></span></a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge btn bg-danger borded-0" title="Delete" onclick="return confirm('Hapus Postingan?')"><span data-feather="trash-2"></span></button>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection