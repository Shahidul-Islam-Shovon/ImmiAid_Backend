@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Create New Service</h2>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <label for="">Write the Name of Service</label>
        <input style="margin-top: 20px;" type="text" name="service_name" placeholder="Service Name" required class="form-control">

        <button type="submit">Submit</button>
    </form>
</div>
@endsection
