@extends('admin.layoutadmin.master')
@section('title', 'edit contact ')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Contact</h1>

    <div class="card">
        <div class="card-header">
            Edit Contact Information
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $contact->city) }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone) }}" maxlength="10" minlength="10" required pattern="\d{10}" title="Please enter exactly 10 digits.">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $contact->address) }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Contact</button>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
