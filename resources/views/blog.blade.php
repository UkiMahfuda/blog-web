{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    @foreach ($post as $p)
        <h4>
            <a href="/blog/{{ $p['slug'] }}">
                {{ $p['title'] }}
            </a>
        </h4>
        <h5>{{ $p['author'] }}</h5>
        <p>{{ $p['body'] }}</p>
    @endforeach
@endsection
