{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    <h3>Post Category : {{ $category }}</h3>

    @foreach ($post as $p)
        <h4>
            <a href="/blog/{{ $p->slug }}" class="text-decoration-none">
                {{ $p->title }}
            </a>
        </h4>
        <p>{{ $p->excerpt }}</p>
    @endforeach
@endsection
