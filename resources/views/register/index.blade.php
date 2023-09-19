@extends('layout.mainlayout')

@section('content')
    <dic class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-signup w-100 m-auto">
                    <form action="/register" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name') is-invalid @enderror" id="name" required
                                placeholder="Name" value="{{ old('name') }}">
                            <label for="floatingInput">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username"
                                class="form-control rounded-0 @error('username') is-invalid @enderror" id="username"
                                required placeholder="Username" value="{{ old('username') }}">
                            <label for="floatingInput">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="email" name="email"
                                class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" required
                                placeholder="name@example.com" value="{{ old('email') }}">
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
                                required placeholder="Password" value="{{ old('password') }}">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <span class="d-block text-end my-3">
                            <a class="text-decoration-none text-dark" href="/login">Have an account?</a>
                        </span>

                        <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
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
