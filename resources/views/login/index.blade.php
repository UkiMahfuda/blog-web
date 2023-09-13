@extends('layout.mainlayout')

@section('content')
    <dic class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-signin w-100 m-auto">
                    <form>

                        <h1 class="h3 mb-3 fw-normal">Login</h1>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <span class="d-block text-end my-3">
                            <a class="text-decoration-none text-dark" href="/register">New Account</a>
                        </span>

                        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
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
