@extends ('layout.mainlayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                <a class="btn btn-primary" href="/blog">Back</a>
            </div>
        </div>
    </div>
@endsection
