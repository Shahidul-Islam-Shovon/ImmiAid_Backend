@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h3>Edit User</h3>

     @if(session('success'))
        <div class="alert alert-success text-bold">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger text-bold">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf 
        @method('PUT')

        <div class="form-group mb-3">
            <label class="font-weight-bold">Name</label>
            <input name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label class="font-weight-bold">Email</label>
            <input name="email" type="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group mb-4">
            <label class="font-weight-bold">Role</label>
            <select name="role" class="form-control" required>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>

        <button class="btn btn-success px-4">Update</button>
    </form>
</div>
@endsection
