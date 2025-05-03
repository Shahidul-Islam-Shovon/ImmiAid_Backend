@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Pricing</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pricing.update', $pricing->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="service_id">Select Service From Here</label>
            <select name="service_id" class="form-control @error('service_id') is-invalid @enderror" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ $pricing->service_id == $service->id ? 'selected' : '' }}>
                        {{ $service->service_name }}
                    </option>
                @endforeach
            </select>
            @error('service_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="fees_charged">Fees Charged (£)</label>
            <input type="number" step="0.01" name="fees_charged" value="{{ old('fees_charged', $pricing->fees_charged) }}" class="form-control @error('fees_charged') is-invalid @enderror" required>
            @error('fees_charged')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="home_office_fee">Home Office Application Fee (£)</label>
            <input type="number" step="0.01" name="home_office_fee" value="{{ old('home_office_fee', $pricing->home_office_fee) }}" class="form-control @error('home_office_fee') is-invalid @enderror" required>
            @error('home_office_fee')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="work_description">Description of Work</label>
            <textarea name="work_description" class="form-control @error('work_description') is-invalid @enderror" required>{{ old('work_description', $pricing->work_description) }}</textarea>
            @error('work_description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="total">Total (£)</label>
            <input type="number" step="0.01" name="total" value="{{ old('total', $pricing->total) }}" class="form-control @error('total') is-invalid @enderror" required>
            @error('total')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success me-2">Update Pricing</button>
        <a href="{{ route('pricing.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
