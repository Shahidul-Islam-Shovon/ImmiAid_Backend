@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h3>Edit User</h3>

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
