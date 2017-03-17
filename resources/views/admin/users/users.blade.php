@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>Users<a href="{{url('admin/user/create')}}" class="pull-right btn btn-primary">Ad User</a></h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td> {{ $user->id }}</td>
                            <td> <a href="{{url('admin/user', [$user->id])}}">{{ $user->name }}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->company}}</td>
                            <td>
                                <a href="{{url('admin/user', [$user->id])}}/edit" class="btn btn-default">Edit</a>
                                <form action="{{url('admin/user',[$user->id])}}" method="POST" class="in-line" style="display: inline">
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