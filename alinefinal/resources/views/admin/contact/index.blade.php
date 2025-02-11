@extends('admin.layoutadmin.master')
@section('title', 'contact list  ')
@section('content')
<div class="container">
    <h1 class="mb-4">Contacts List</h1>

    <a href="{{ route('admin.contact.create') }}" class="btn btn-primary mb-3">Add New Contact</a>

    <!-- Contacts Table -->
    <div class="card">
        <div class="card-header">
            Contacts
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->city }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->address }}</td>
                            <td>
                                <a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
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
