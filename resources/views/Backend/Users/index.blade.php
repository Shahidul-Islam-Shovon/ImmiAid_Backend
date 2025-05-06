@extends('layouts.dashboard')


@section('title', 'User List')


@section('content')
<div class="container">
    
    <!-- Add User Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>All Users</h3>
        @if(auth()->user()->id === 1)
            <button class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">+ Add User</button>
        @endif
    </div>


    @if(auth()->user()->id === 1)
    {{-- Add User Modal --}}
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Confirm Password --}}
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endif






    @if(session('success'))
        <div class="alert alert-success text-bold">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger text-bold">{{ session('error') }}</div>
    @endif

    <table id="UserTable" class="display table table-striped table-bordered">
        <thead>
            <tr>
            <th>Name</th><th>Email</th><th>Role</th><th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->role }}</td>
                <td>
                        @if($user->role != 'admin')
                            <form action="{{ route('users.makeAdmin', $user->id) }}" method="POST" style="display:inline;">
                                @csrf @method('PATCH')
                                <button class="btn btn-sm btn-warning me-1">Make Admin</button>
                            </form>
                        @endif

                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info me-1">Edit</a>

                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('script')

<script>
     $(document).ready(function () {
        $('#UserTable').DataTable();

        @if($errors->any())
            $('#addUserModal').modal('show');
        @endif
    });
</script>

@endsection


