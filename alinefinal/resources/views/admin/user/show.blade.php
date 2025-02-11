@extends('admin.layoutadmin.master')
@section('title', 'user  detail ')

@section('content')
<div class="container">
    <h1 class="mb-4">User Details</h1>

    <div class="card">
        <div class="card-header">
            User Information
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role :</strong> {{ $user->role}}</p>
          

            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Back to User List</a>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
