@extends ('layout.mainlayout')

@section('content')
    <h4>{{ $post['title'] }}</h4>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>


    <a href="/blog">Back</a>
@endsection
