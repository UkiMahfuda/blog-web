@extends('dashboard.layoutsdb.mainlayoutdb')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post.</h1>
    </div>

    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $p->slug }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                            <a href="/dashboard/posts/{{ $p->slug }}" class="btn btn-warning"><i
                                    class="bi bi-pencil"></i></a>
                            <a href="/dashboard/posts/{{ $p->slug }}" class="btn btn-danger"><i
                                    class="bi bi-archive"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
@endsection
