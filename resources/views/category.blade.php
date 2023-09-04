{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    <h3>Post Category : {{ $category }}</h3>

    @foreach ($post as $p)
        <h4>
            <a href="/blog/{{ $p->slug }}">
                {{ $p->title }}
            </a>
        </h4>
        <h5>{{ $p->author }}</h5>
        <p>{{ $p->excerpt }}</p>
    @endforeach
@endsection
