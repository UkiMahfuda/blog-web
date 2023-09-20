@extends('dashboard.layoutsdb.mainlayoutdb')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>

    <div class="table-responsive small">

        <a href="/dashboard/posts/create" class="btn btn-primary">Create New Post</a>

        @if (session()->has('success'))
            <div class="col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
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
                            <a href="/dashboard/posts/{{ $p->slug }}" class="btn btn-info"><i
                                    class="bi bi-eye"></i></a>
                            <a href="/dashboard/posts/{{ $p->slug }}/edit" class="btn btn-warning"><i
                                    class="bi bi-pencil"></i></a>

                            <form action="/dashboard/posts/{{ $p->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn bg-danger border-0" onclick="return confirm('Delete This Post?')">
                                    <i class="bi bi-archive"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
@endsection
