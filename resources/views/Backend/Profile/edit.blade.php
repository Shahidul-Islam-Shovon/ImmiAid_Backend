<!-- resources/views/admin/profile/edit.blade.php -->

@extends('layouts.dashboard')

@section('title', 'Admin Profile')

@section('content')
<div class="container">
    <h3>Update Profile</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.profile.update') }}">
        @csrf

        <div class="form-group mt-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mt-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mt-3">
            <label>New Password (optional)</label>
            <input type="password" name="password" class="form-control">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mt-3">
            <label>Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
