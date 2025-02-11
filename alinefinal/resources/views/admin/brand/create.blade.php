@extends('admin.layoutadmin.master')
@section('title', 'brand list ')

@section('content')
<div class="container">
    <h1>Add New Brand</h1>

    <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
     
        <div class="form-group">
            <label for="name">Brand Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="logo">Brand Logo</label>
            <input type="file" name="logo" id="logo" class="form-control">
        </div>  

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
