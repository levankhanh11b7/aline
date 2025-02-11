@extends('admin.layoutadmin.master')

@section('content')
<div class="container">
    <h1>Add Category</h1>
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
@endsection
