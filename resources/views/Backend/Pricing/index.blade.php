@extends('layouts.dashboard')

@section('title', 'Add Pricing')

@section('content')
<div class="container">

    <h2 class="mb-4 d-flex justify-content-between align-items-center">
        All Pricings
        <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">+ Add Pricing</button>
    </h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Pricing Table --}}
    <table id="PricingTable" class="display table table-bordered table-striped">
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
<div class="modal fade @if($errors->any()) show d-block @endif" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true" style="@if($errors->any()) display: block; background-color: rgba(0,0,0,0.5); @endif">
  <div class="modal-dialog" role="document">
    <form action="{{ route('pricing.store') }}" method="POST">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Pricing</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#createModal').modal('hide')">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          {{-- Service --}}
          <div class="form-group">
            <label for="service_id">Service</label>
            <select name="service_id" class="form-control @error('service_id') is-invalid @enderror">
              <option value="">-- Select Service --</option>
              @foreach($services as $service)
                <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>{{ $service->service_name }}</option>
              @endforeach
            </select>
            @error('service_id') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          {{-- Fees Charged --}}
          <div class="form-group">
            <label for="fees_charged">Fees Charged (£)</label>
            <input type="number" step="0.01" name="fees_charged" class="form-control @error('fees_charged') is-invalid @enderror" value="{{ old('fees_charged') }}">
            @error('fees_charged') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          {{-- Home Office Fee --}}
          <div class="form-group">
            <label for="home_office_fee">Home Office Application Fee (£)</label>
            <input type="number" step="0.01" name="home_office_fee" class="form-control @error('home_office_fee') is-invalid @enderror" value="{{ old('home_office_fee') }}">
            @error('home_office_fee') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          {{-- Description --}}
          <div class="form-group">
            <label for="work_description">Description of Work</label>
            <textarea name="work_description" class="form-control @error('work_description') is-invalid @enderror" rows="3">{{ old('work_description') }}</textarea>
            @error('work_description') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          {{-- Total --}}
          <div class="form-group">
            <label for="total">Total (£)</label>
            <input type="number" step="0.01" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total') }}">
            @error('total') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add Pricing</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#createModal').modal('hide')">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@include('Backend.Js')
