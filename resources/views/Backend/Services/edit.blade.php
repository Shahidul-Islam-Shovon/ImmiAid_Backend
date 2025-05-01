@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 style="margin-bottom: 25px;">Edit Service</h2>
    <form style="margin-top:20px;" action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Change Service Name</label>
        <input style="margin-top: 20px;" class="form-control" type="text" name="service_name" value="{{ $service->service_name }}" required>
        <button style="margin-top: 15px;" class="btn btn-success" type="submit">Update Service</button>
    </form>
</div>
@endsection
