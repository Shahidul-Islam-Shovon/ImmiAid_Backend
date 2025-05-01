@extends('layouts.dashboard')


@section('title')

Add Service

@endsection

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>All Services</h4>
        <!-- Add Service Button -->
        <button style="margin-bottom: 20px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceModal">+ Add New Service</button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table id="ServiceTable" class="display table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Service Name</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $key => $service)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $service->service_name }}</td>
                    <td class="text-center">

                        
                         <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-primary">Edit</a>

                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete

                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" method="POST" action="{{ route('services.update', $service->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Service Name</label>
                                    <input type="text" name="service_name" class="form-control" value="{{ $service->service_name }}" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Add Modal -->
<div class="modal fade @if($errors->any()) show d-block @endif" id="addServiceModal" tabindex="-1" @if($errors->any()) style="display:block; background-color: rgba(0,0,0,0.5);" @endif>
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add New Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Service Name</label>
                    <input type="text" name="service_name" class="form-control" value="{{ old('service_name') }}" required>
                    @error('service_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
</div>

@endsection


@section('scripts')
<!-- Include jQuery & DataTable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function () {
    console.log('Trying to load DataTable...');
    $('#ServiceTable').DataTable();
});
</script>
@endsection