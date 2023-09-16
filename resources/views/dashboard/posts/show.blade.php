@extends('dashboard.layoutsdb.mainlayoutdb')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post.</h1>
    </div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-8">
                <h4>{{ $post->title }}</h4>
                <img src="https://picsum.photos/1200/200" class="card-img-top rounded-3" alt="{{ $post->category->name }} ">
                <small>
                    <p>By {{ $post->author->name }} as <a href="/blog?category{{ $post->category->slug }}"
                            class="text-decoration-none">
                            {{ $post->category->name }} </a></p>
                </small>
                {{-- htmlspecialchar --}}
                {!! $post->body !!}
                <br>
                <a href="/dashboard/posts" class="btn btn-info">Back</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>

    {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
@endsection
