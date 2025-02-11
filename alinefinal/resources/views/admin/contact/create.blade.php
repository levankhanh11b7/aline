@extends('admin.layoutadmin.master')
@section('title', 'contact list ')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Contact</h1>

    <div class="card">
        <div class="card-header">
            Contact Form
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contact.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" maxlength="10" minlength="10" required pattern="\d{10}" title="Please enter exactly 10 digits.">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                </div>

                <button type="submit" class="btn btn-primary">Save Contact</button>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
