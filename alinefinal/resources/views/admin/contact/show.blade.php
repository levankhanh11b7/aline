@extends('admin.layoutadmin.master')
@section('title', 'contact detail ')

@section('content')
<div class="container">
    <h1 class="mb-4">Contact Details</h1>

    <div class="card">
        <div class="card-header">
            Contact Information
        </div>
        <div class="card-body">
            <h5 class="card-title">Details</h5>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <p class="form-control-plaintext">{{ $contact->city }}</p>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <p class="form-control-plaintext">{{ $contact->phone }}</p>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <p class="form-control-plaintext">{{ $contact->address }}</p>
            </div>

            <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Back to Contact List</a>
            <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
