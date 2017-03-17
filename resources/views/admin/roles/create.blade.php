@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Add New Role</h3>
            <form action="{{url('/admin/role')}}" method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="role" class="form-control" placeholder="User Role" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection