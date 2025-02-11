@extends('admin.layoutadmin.master')
@section('title', 'blog list ')
@section('content')
<div class="container">
    <h1>Blog List</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Create New Blog</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td> <img src="{{ asset('storage/' . $blog->image) }}" width="70px" height="70px" alt=""></td>
                    <td>
                        <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
