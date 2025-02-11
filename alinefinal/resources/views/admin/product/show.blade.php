@extends('admin.layoutadmin.master')
@section('title', 'Products detail ')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>Price: ${{ number_format($product->price, 2) }}</p>

    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200">
    @endif

    <div class="mt-3">
        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection
