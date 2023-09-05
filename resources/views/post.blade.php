@extends ('layout.mainlayout')

@section('content')
    <h4>{{ $post->title }}</h4>
    <h5>By {{ $post->author->name }} as <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }} </a></h5>
    {!! $post->body !!}

    <br>
    <a href="/blog">Back</a>
@endsection
