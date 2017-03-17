@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Details</h4>
            <h3>{{$role->role}}</h3>
            <a href="{{url('admin/role')}}" class="btn btn-default">Go Back</a>
        </div>
    </div>
@endsection