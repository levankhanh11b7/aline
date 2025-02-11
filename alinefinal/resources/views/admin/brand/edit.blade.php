@extends('admin.layoutadmin.master')
@section('title', 'brand list ')

@section('content')
<div class="container">
    <h1>Edit Brand</h1>

    <form action="{{ route('admin.brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Brand Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $brand->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="logo">Brand Logo</label>
            <input type="file" name="logo" id="logo" class="form-control">
            @if ($brand->logo)
                <img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->name }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
