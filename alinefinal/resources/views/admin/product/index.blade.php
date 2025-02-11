@extends('admin.layoutadmin.master')
@section('title', 'Products list ')

@section('content')
<div class="container">
    <h1>Products</h1>
    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add New Product</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-sm btn-info">View</a>
                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
