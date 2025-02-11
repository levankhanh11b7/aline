@extends('admin.layoutadmin.master')
@section('title', 'Create product ')


@section('content')
<div class="container">
    <h1>Add New Product</h1>

    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Brand</label>
        <select name="brand_id" id="">
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}">
                {{ $brand->name }}
            </option>
            @endforeach
        </select>
         </div>


         <div class="form-group">
         <label for="name">Category</label>
        <select name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
            @endforeach
        </select>


        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>
          <!-- Mô tả sản phẩm -->
          <label for="description">Description:</label>
          <textarea name="description" id="description" required></textarea>

        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
