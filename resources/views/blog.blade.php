{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    <h1 class="text-center">{{ $title }}</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="/blog" method="GET">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @else
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Blog?" name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-outline-info text-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if ($post->count())
        <div class="card text-center mb-5">
            @if ($post[0]->image)
                <div style="max-height:200px; max-width:1200px; overflow:hidden ">
                    <img src="{{ asset('storage/' . $post[0]->image) }}" class="card-img-top rounded-3"
                        alt="{{ $post[0]->category->name }} ">
                </div>
            @else
                <img src="https://picsum.photos/1200/200" class="card-img-top" alt="{{ $post[0]->category->name }} ">
            @endif
            <div class="card-body">
                <a href="/blog/{{ $post[0]->slug }}" class="text-decoration-none ">
                    <h4 class="card-title text-black">{{ $post[0]->title }}</h4>
                </a>
                <small>
                    <h6>By <a href="/blog?author={{ $post[0]->author->username }}"
                            class="text-decoration-none">{{ $post[0]->author->name }}</a>
                        as <a href="/blog?category={{ $post[0]->category->slug }}" class="text-decoration-none">
                            {{ $post[0]->category->name }} </a>
                    </h6>
                    {{-- <h6>
                        By
                        @if ($post[0]->author)
                            <a href="/authors/{{ $post[0]->author->name }}"
                                class="text-decoration-none">{{ $post[0]->author->name }}</a>
                        @else
                            Unknown Author
                        @endif
                        as
                        <a href="/categories/{{ $post[0]->category->slug }}" class="text-decoration-none">
                            {{ $post[0]->category->name }}
                        </a>
                    </h6> --}}
                    <p class="card-text">{{ $post[0]->excerpt }}</p>
                </small>
            </div>
            <small>
                <div class="card-footer text-muted">
                    {{ $post[0]->created_at->diffForHumans() }}
                </div>
            </small>
        </div>



        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                @foreach ($post->skip(1) as $p)
                    <div class="col mb-3">
                        <div class="card">
                            <small>
                                <a href="/blog?category={{ $p->category->slug }}">
                                    <p class="position-absolute text-white bg-dark fs-6 px-4 py-1 ">
                                        {{ $p->category->name }}
                                    </p>
                                </a>

                            </small>
                            @if ($p->image)
                                <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top rounded-3"
                                    alt="{{ $p->category->name }} ">
                                {{-- <div style="max-height:100px; max-width:150px; overflow:hidden ">
                                </div> --}}
                            @else
                                <img src="https://picsum.photos/150/100" class="card-img-top"
                                    alt="{{ $p->category->name }} ">
                            @endif
                            <div class="card-body">
                                <a href="/blog/{{ $p->slug }}" class="text-decoration-none ">
                                    <h5 class="card-title text-black">{{ $p->title }}</h5>
                                </a>
                                <small>
                                    <h6>
                                        By <a href="/blog?author={{ $p->author->username }}"
                                            class="text-decoration-none">{{ $p->author->name }}</a>
                                    </h6>
                                    {{-- <h6>
                                    By
                                    @if ($p->author)
                                        <a href="/authors/{{ $p->author->name }}"
                                            class="text-decoration-none">{{ $p->author->name }}</a>
                                    @else
                                        Unknown Author
                                    @endif
                                </h6> --}}
                                    {{ $p->created_at->diffForHumans() }}

                                    <p class="card-text">{{ $p->excerpt }}</p>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center text-danger">No Post Found</p>
    @endif
    {{ $post->links() }}


    {{-- @foreach ($post->skip(1) as $p)
        <h4>
            {{ $p->title }}
</h4>
<h6>By <a href="/authors/{{ $p->author->username }}" class="text-decoration-none">{{ $p->author->name }}</a> as <a href="/categories/{{ $p->category->slug }}" class="text-decoration-none">
        {{ $p->category->name }} </a>
</h6>
<small>{{ $p->created_at->diffForHumans() }}</small>
<p>{{ $p->excerpt }}</p>
<a href="/blog/{{ $p->slug }}" class="text-decoration-none">
    <p>
        Read More
    </p>
</a>
<hr>
@endforeach --}}
@endsection
