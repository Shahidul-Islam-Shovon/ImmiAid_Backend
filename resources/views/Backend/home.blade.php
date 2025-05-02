@extends('layouts.dashboard')


@section('title', 'Dashboard')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Welcome <strong>{{auth()->user()->name}}</strong>, Have a Great Time</h3>
            <h4 style="margin-top: 20px;">This is Your Admin Dashboard ! </h4>
        </div>
    </div>
</div>

@endsection