@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-4" role="alert">
      {{ session('success') }}
    </div> 
    @endif

    <div class="table-responsive col-lg-4">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-4"><span data-feather="plus" class="mb-1"></span>Create New Category</a>
        <table class="table table-striped table-sm ">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>  
          </thead>
          <tbody>
            @foreach ($categories->reverse() as $category)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge btn bg-warning" title="Edit"><span data-feather="edit"></span></a>

                <form action="/dashboard/categories/{{ $category->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge btn bg-danger borded-0" title="Delete" onclick="return confirm('Hapus Kategori?')"><span data-feather="trash-2"></span></button>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection