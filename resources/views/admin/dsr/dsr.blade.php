@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Details</h4>
            <h3>From: {{$dsr->form}}</h3>
            <h3>To: {{$dsr->to}}</h3>
            <a href="{{url('admin/dsr')}}" class="btn btn-default">Go Back</a>
        </div>
    </div>
@endsection