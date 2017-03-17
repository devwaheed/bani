@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>User Roles <a href="{{url('admin/role/create')}}" class="pull-right btn btn-primary">Ad Role</a></h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($roles as $role)
                        <tr>
                            <td> {{ $role->id }}</td>
                            <td> <a href="{{url('admin/role', [$role->id])}}">{{ $role->role }}</a></td>
                            <td>
                                <a href="{{url('admin/role', [$role->id])}}/edit" class="btn btn-default">Edit</a>
                                <form action="{{url('admin/role',[$role->id])}}" method="POST" class="in-line" style="display: inline">
                                        {{ method_field('Delete') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection