@extends('layouts.dashboard')


@section('title', 'Add Logo')


@section('content')
<div class="container">
    <h3>Add Logo</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('logos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" class="form-control mt-2" required>
        @error('image')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <button class="btn btn-primary mt-3">Upload</button>
    </form>

    <hr>
    <h4>All Logos</h4>
    <table id="LogoTable" class="display table table-striped">
        <thead>
            <tr>
                <th>SL</th>
                <th>Logo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logos as $key => $logo)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><img src="{{ asset('storage/' . $logo->image) }}" width="100"></td>
                    <td>
                        <a href="{{ route('logos.edit', $logo->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('logos.destroy', $logo->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this logo?')">Delete</button>
                        </form>

                        @if($logo->status == 1)
                            <button class="btn btn-success btn-sm mt-1" disabled>Active</button> {{-- এটা disable --}}
                        @else
                            <a href="{{ route('logos.makeActive', $logo->id) }}" class="btn btn-primary btn-sm mt-1">Make Active</a>
                        @endif
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
        $('#LogoTable').DataTable();
    });
</script>

@endsection


