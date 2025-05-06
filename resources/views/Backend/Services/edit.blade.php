@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Service</h2>

    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="service_name">Service Name</label>
            <input
                type="text"
                name="service_name"
                class="form-control @error('service_name') is-invalid @enderror"
                value="{{ old('service_name', $service->service_name) }}"
                required
            >
            @error('service_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Service</button>
    </form>
</div>
@endsection
