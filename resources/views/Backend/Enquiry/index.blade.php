@extends('layouts.dashboard')


@section('title', 'Users Enquiry')


@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <h2>See Users Enquiry Here</h2>
            <h4> Total Inquiries: {{ $all_enquiries->count() }}</h4>
            <p> Unread: {{ $all_enquiries->where('is_read', false)->count() }}</p>
            <p> Read: {{ $all_enquiries->where('is_read', true)->count() }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table id="EnquiryTable" class="display table table-bordered table-striped">
                <thead style="">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_enquiries as $key => $enquiry)
                        <tr style="{{ $enquiry->is_read ? '' : 'font-weight: bold; background-color: #f0f0f0;' }}">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $enquiry->name }}</td>
                            <td>{{ $enquiry->phone }}</td>
                            <td>{{ $enquiry->email }}</td>
                            <td>{{ $enquiry->message ? $enquiry->message : 'User Not Send any Messages' }}</td>
                            <td>
                                @if ($enquiry->is_read)
                                    <span class="badge bg-success">Read</span>
                                @else
                                    <span class="badge bg-danger">Unread</span>
                                @endif
                            </td>
                            <td>
                                @if (!$enquiry->is_read)
                                    <a href="{{ route('inquiry.markAsRead', $enquiry->id) }}" class="btn btn-sm btn-primary">Mark as Read</a>
                                @else
                                    <span class="text-muted">✔ Already Read</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



@section('script')

<script>
    $(document).ready(function () {
        console.log('Trying to load DataTable...');
        $('#EnquiryTable').DataTable();
    });
    
</script>

@endsection


