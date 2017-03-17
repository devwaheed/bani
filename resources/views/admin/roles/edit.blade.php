@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Update Role</h3>
            <form action="{{url('admin/role', [$role->id])}}" method="POST" >
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="role" class="form-control" placeholder="role name" value="{{$role->role}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection