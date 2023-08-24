{{-- @dd($desc); --}}
@extends('layout.mainlayout')

@section('title', 'About')

@section('content')
    <h4>Hello {{ $name }}, This is Page for describe about you</h4>

    @foreach ($desc as $data1)
        <h5>{{ $data1['name'] }}</h5>
        <h6>{{ $data1['edu'] }}</h6>
        <p>{{ $data1['description'] }}</p>
    @endforeach

@endsection
