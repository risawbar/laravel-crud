@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5 mt-5">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif()

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif()


        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror()
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="btn btn-dark w-100 py-2" type="submit">Login</button>
              <small class="d-block mt-2">Belum Punya Akun? <a href="/register" class="text-decoration-none">Daftar Sekarang</a></small>
            </form>
        </main>
    </div>
</div>

    @endsection()