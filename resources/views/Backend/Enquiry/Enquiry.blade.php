@extends('layouts.dashboard')


@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <h3>See Users Send Enquiry Here</h3>
            </div>
            <div class="col-md-12">
                <p>Total: {{ $total }} | Read: {{ $read }} | Unread: {{ $unread }}</p>

                @if (session('success'))
                    <p style="color: green;">{{ session('success') }}</p>
                @endif

                <table id="inquiryTable" class="display">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inquiries as $inq)
                            <tr class="{{ $inq->is_read ? '' : 'unread' }}">
                                <td>{{ $inq->name }}</td>
                                <td>{{ $inq->email }}</td>
                                <td>{{ $inq->message }}</td>
                                <td>
                                    @if (!$inq->is_read)
                                        <a href="{{ url('/inquiries/read/' . $inq->id) }}">Mark as Read</a>
                                    @else
                                        <span style="color: green;">Read</span>
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