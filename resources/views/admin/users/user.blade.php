@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Details</h4>
            <h3>Full Name: {{$user->name}}</h3>
            <h3>Email: {{$user->email}}</h3>
            <h3>Phone: {{$user->phone}}</h3>
            <h3>Company: {{$user->company}}</h3>
            <a href="{{url('admin/user')}}" class="btn btn-default">Go Back</a>
        </div>
    </div>
@endsection