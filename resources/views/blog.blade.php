{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    <h1>{{ $title }}</h1>
    @foreach ($post as $p)
        <h4>
            {{ $p->title }}
        </h4>
        <h6>By <a href="/authors/{{ $p->author->username }}" class="text-decoration-none">{{ $p->author->name }}</a> as <a
                href="/categories/{{ $p->category->slug }}" class="text-decoration-none">
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
    @endforeach
@endsection
