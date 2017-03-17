@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Update Role</h3>
            <form action="{{url('admin/interest', [$interest->id])}}" method="POST" >
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="from" class="form-control" placeholder="from" value="{{$interest->from}}">
                </div>
                <div class="form-group">
                    <input type="text" name="to" class="form-control" placeholder="to" value="{{$interest->to}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection