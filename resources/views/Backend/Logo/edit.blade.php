@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h3>Edit Logo</h3>

    <form action="{{ route('logos.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <img src="{{ asset('storage/' . $logo->image) }}" width="120">
        </div>
        <input type="file" name="image" class="form-control mt-2">
        @error('image')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <button class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection
