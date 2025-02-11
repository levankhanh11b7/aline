@extends('admin.layoutadmin.master')
@section('title', 'User list ')
@section('content')
<div class="container">
    <h1 class="mb-4">Admin Users</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">Create New User</a>

    <div class="card">
        <div class="card-header">
            User List
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>role</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role}}</td>
                            <td>{{ $user->status===1 ? 'activated ':'no activated' }}</td>
                            <td>
                                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
