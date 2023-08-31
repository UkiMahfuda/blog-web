@extends ('layout.mainlayout')

@section('content')
    <h4>{{ $post->title }}</h4>
    <h5>{{ $post->author }}</h5>
    {!! $post->body !!}

    <br>
    <a href="/blog">Back</a>
@endsection
