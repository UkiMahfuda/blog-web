@extends('dashboard.layoutsdb.mainlayoutdb')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post.</h1>
    </div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-8">
                <h4>{{ $post->title }}</h4>
                @if ($post->image)
                    <div style="max-height:200px; max-width:1200px; overflow:hidden ">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top rounded-3"
                            alt="{{ $post->category->name }} ">
                    </div>
                @else
                    <img src="https://picsum.photos/1200/200" class="card-img-top rounded-3"
                        alt="{{ $post->category->name }} ">
                @endif

                <small>
                    <p>By {{ $post->author->name }} as <a href="/blog?category{{ $post->category->slug }}"
                            class="text-decoration-none">
                            {{ $post->category->name }} </a></p>
                </small>
                {{-- htmlspecialchar --}}
                {!! $post->body !!}
                <br>
                <a href="/dashboard/posts" class="btn btn-info">Back</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0 p-2" onclick="return confirm('Delete This Post?')">Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
@endsection
