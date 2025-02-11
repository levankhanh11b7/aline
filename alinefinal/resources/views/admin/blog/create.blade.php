@extends('admin.layoutadmin.master')
@section('title', 'blog list ')

@section('content')
<h1>Create Blog</h1>
<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="image">blog Image</label>
        <input type="file" name="image" id="image" {{ old('image') }} class="form-control">
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea name="content" id="editor">{{ old('content') }}</textarea>
    </div>
    <div>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" value="{{ old('author') }}">
    </div>
    <button type="submit">Create Blog</button>
</form>

<!-- CKEditor 5 Script -->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
