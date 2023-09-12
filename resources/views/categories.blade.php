{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    <h3>Post Category</h3>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/blog?category{{ $category->slug }}"">
                        <div class="card text-bg-dark">
                            <img src="https://picsum.photos/150/75" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill py-3 m-0"
                                    style="background-color: rgba(0,0,0,0.7)">
                                    <p class="text-center">{{ $category->name }}</p>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <a href="\blog" class="text-decoration-none btn btn-primary mt-3">Back</a>
    </div>
@endsection
