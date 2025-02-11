@extends('admin.layoutadmin.master')
@section('title', 'edit user')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit User</h1>

    <div class="card">
        <div class="card-header">
            Edit User Information
        </div>
        <div class="card-body">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password (leave blank to keep current password)</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="role" id="role" value="admin" class="form-check-input"{{ $user->role=='admin'?'checked':'' }} >
                    <label for="role" class="form-check-label">admin</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="role" id="role" value="user" class="form-check-input"{{ $user->role=='user'?'checked':'' }} >
                    <label for="role" class="form-check-label">user</label>
                </div>

                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
