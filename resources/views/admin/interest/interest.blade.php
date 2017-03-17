@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Details</h4>
            <h3>From: {{$interest->from}}</h3>
            <h3>To: {{$interest->to}}</h3>
            <a href="{{url('admin/interest')}}" class="btn btn-default">Go Back</a>
        </div>
    </div>
@endsection