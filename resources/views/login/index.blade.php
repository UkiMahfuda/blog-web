@extends('layout.mainlayout')

@section('content')
    <dic class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin w-100 m-auto">
                    <form action="/login" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal">Login</h1>

                        <div class="form-floating">
                            <input type="email" name="email"
                                class="form-control rounded-top @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" value="{{ old('email') }}" autofocus required">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required">
                            <label for="floatingPassword">Password</label>

                        </div>
                        <span class="d-block text-end my-3">
                            <a class="text-decoration-none text-dark" href="/register">New Account</a>
                        </span>

                        <button class="btn btn-primary w-100 py-2" name="submit" id="submit"
                            type="submit">Login</button>
                        <p class="mt-5 mb-3 text-body-secondary text-center">
                            <small>
                                &copy;Created By Akhfee Lauki Mahfuda
                            </small>
                        </p>
                    </form>
                </main>
            </div>
        </div>
    </dic>
@endsection
