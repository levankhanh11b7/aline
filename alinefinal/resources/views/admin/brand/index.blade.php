@extends('admin.layoutadmin.master')
@section('title', 'brand list ')
@section('content')
<div class="container">
    <h1>Brands</h1>
    <a href="{{ route('admin.brand.create') }}" class="btn btn-primary">Add New Brand</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->name }}</td>
                <td><img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->name }}" width="50"></td>
                <td>
                    <a href="{{ route('admin.brand.edit', $brand->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.brand.destroy', $brand->id) }}" method="POST" style="display:inline;">
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
