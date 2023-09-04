{{-- @dd($post) --}}

@extends('layout.mainlayout')

@section('content')
    <h3>Post Category</h3>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h4>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }} </a>
                </h4>
            </li>
        </ul>
    @endforeach

    <a href="\blog">Back</a>
@endsection
