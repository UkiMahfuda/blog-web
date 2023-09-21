@extends('dashboard.layoutsdb.mainlayoutdb')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">
                {{-- Auto Slug With Ajax --}}
                {{-- <input type="text" name="title" class="form-control"
                    onkeyup="document.getElementById('autoslug').value = this.value.replace(/\s+/g, '-').toLowerCase()"> --}}
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug"
                    name="slug" {{--  disabled readonly value="{{ old('slug') }}" --}}>
                {{-- Auto Slug With Ajax --}}
                {{-- <input type="text" name="slug" class="form-control" id="autoslug" disabled readonly> --}}
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>Choose Category</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <img class="img-fluid img-preview col-sm-5">
                <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" class=" @error('body') is-invalid @enderror"
                    value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <script>
        // otomatis slug
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        // unactive btn btrix
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        // preview image
        function previewImage() {

            //ambil id dan name input
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.img-preview');

            // ubah img ke style block
            imagePreview.style.display = 'block';

            // ammbil data image
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }

            // function preview else
            // const blob = URL.createObjectURL(image.files[0]);
            // imagePreview.src = blob;
        }
    </script>
@endsection
