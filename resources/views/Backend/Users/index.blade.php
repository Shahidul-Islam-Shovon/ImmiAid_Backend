@extends('layouts.dashboard')


@section('content')
<div class="container">
    <h3>All Users</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <tr>
            <th>Name</th><th>Email</th><th>Role</th><th>Action</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->role }}</td>
                <td>
                    @if($user->role != 'admin')
                        <form action="{{ route('users.makeAdmin', $user->id) }}" method="POST">
                            @csrf @method('PATCH')
                            <button class="btn btn-sm btn-warning">Make Admin</button>
                        </form>
                    @endif
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
