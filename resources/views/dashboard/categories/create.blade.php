@extends('dashboard/layouts/main')
@section('container')

<div class="card mt-5" style="width: 18rem;">
    <div class="card-body">
        <form action="/dashboard/categories" method="post">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="name" value="{{ old('category') }}">
                @error('category')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
      
    </div>
  </div>

  <script>
    const category = document.getElementById('category');
    const slug = document.getElementById('slug');

    category.addEventListener('change', function() {

        fetch('/dashboard/categories/checkSlug?category=' + category.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    });

  </script>

@endsection