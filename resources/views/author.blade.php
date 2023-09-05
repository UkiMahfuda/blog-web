{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    @foreach ($post as $p)
        <h4>
            {{ $p->title }}
        </h4>
        <h6>By <a href="/author/{{ $p->user->username }}" class="text-decoration-none">{{ $p->user->name }}</a> as <a
                href="/categories/{{ $p->category->slug }}" class="text-decoration-none">
                {{ $p->category->name }} </a>
        </h6>
        <p>{{ $p->excerpt }}</p>
        <a href="/blog/{{ $p->slug }}" class="text-decoration-none">
            <p>
                Read More
            </p>
        </a>
        <hr>
    @endforeach
@endsection
