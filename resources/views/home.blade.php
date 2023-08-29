@extends('layout.mainlayout')

@section('content')
    <h4>Selamat Datang, {{ $name }}.</h4>

    @if ($role == 'Admin')
        <h5>Anda adalah Administrator</h5>
    @elseif($role == 'User')
        <h5>Anda adalah User</h5>
    @endif

    {{-- @switch($role)
        @case($role == 'Admin')
            <h5>Anda adalah Administrator</h5>
        @break

        @case($role == 'User')
            <h5>Anda adalah User</h5>
        @break

        @default
    @endswitch --}}

    <table class="table">
        <tr class=" bg-info">
            <th colspan="2">List Empolye</th>
        </tr>
        <tr class=" bg-info">
            <th>No</th>
            <th>Name</th>
        </tr>

        @foreach ($employe as $data1)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data1 }}</td>
            </tr>
        @endforeach
    </table>
@endsection
