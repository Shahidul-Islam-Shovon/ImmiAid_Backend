@extends('layouts.dashboard')


@section('title', 'User List')


@section('content')
<div class="container">
    <h3>All Users</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
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
        console.log('Trying to load DataTable...');
        $('#UserTable').DataTable();
    });
</script>

@endsection


