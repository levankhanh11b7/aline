@extends('admin.layoutadmin.master')
@section('title', 'blog detail ')

@section('content')
<div class="container">
    <h1>{{ $blog->title }}</h1>
    
    <div class="mb-3">
        {!! $blog->content !!}
    </div>
    
    <p><strong>Author:</strong> {{ $blog->author }}</p>
    
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary">Back to Blog List</a>
    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
    </form>
</div>
@endsection
