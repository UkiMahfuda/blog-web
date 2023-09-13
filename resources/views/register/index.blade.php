@extends('layout.mainlayout')

@section('content')
    <dic class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-signup w-100 m-auto">
                    <form>

                        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>

                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
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
