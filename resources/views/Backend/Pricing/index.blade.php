@extends('layouts.dashboard')

@section('title', 'Add Pricing')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Pricings</h2>
        <button class="btn btn-primary" onclick="new bootstrap.Modal(document.getElementById('createModal')).show();">+ Add Pricing</button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Pricing Table --}}
    <div class="table-responsive">
        <table id="PricingTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Fees Charged (£)</th>
                    <th>Home Office Fee (£)</th>
                    <th>Description</th>
                    <th>Total (£)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pricings as $pricing)
                <tr>
                    <td>{{ $pricing->service->service_name }}</td>
                    <td>£{{ number_format($pricing->fees_charged, 2) }}</td>
                    <td>£{{ number_format($pricing->home_office_fee, 2) }}</td>
                    <td>{{ $pricing->work_description }}</td>
                    <td>£{{ number_format($pricing->total, 2) }}</td>
                    <td>
                        <a href="{{ route('pricing.edit', $pricing->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pricing.destroy', $pricing->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Create Pricing Modal --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('pricing.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Add New Pricing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- Service --}}
                        <div class="mb-3">
                            <label for="service_id" class="form-label">Service</label>
                            <select name="service_id" class="form-select @error('service_id') is-invalid @enderror">
                                <option value="">-- Select Service --</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                        {{ $service->service_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('service_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        {{-- Fees Charged --}}
                        <div class="mb-3">
                            <label for="fees_charged" class="form-label">Fees Charged (£)</label>
                            <input type="number" step="0.01" name="fees_charged" class="form-control @error('fees_charged') is-invalid @enderror" value="{{ old('fees_charged') }}" required>
                            @error('fees_charged') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        {{-- Home Office Fee --}}
                        <div class="mb-3">
                            <label for="home_office_fee" class="form-label">Home Office Fee (£)</label>
                            <input type="number" step="0.01" name="home_office_fee" class="form-control @error('home_office_fee') is-invalid @enderror" value="{{ old('home_office_fee') }}" required>
                            @error('home_office_fee') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="work_description" class="form-label">Description</label>
                            <textarea name="work_description" class="form-control @error('work_description') is-invalid @enderror" rows="3" required>{{ old('work_description') }}</textarea>
                            @error('work_description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        {{-- Total --}}
                        <div class="mb-3">
                            <label for="total" class="form-label">Total (£)</label>
                            <input type="number" step="0.01" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total') }}" required>
                            @error('total') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add Pricing</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<!-- Popper.js (required for dropdowns/modals/tooltips) -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


<script>
$(document).ready(function () {
    $('#PricingTable').DataTable();

    @if ($errors->any())
        $('#createModal').modal('show');
    @endif
});
</script>
@endsection
