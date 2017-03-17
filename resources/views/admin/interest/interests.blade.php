@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Interests <a href="{{url('admin/interest/create')}}" class="pull-right btn btn-primary">Ad Interest</a></h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($interests as $interest)
                        <tr>
                            <td> {{ $interest->id }}</td>
                            <td> <a href="{{url('admin/interest', [$interest->id])}}">{{ $interest->from }}</a></td>
                            <td> <a href="{{url('admin/interest', [$interest->id])}}">{{ $interest->to }}</a></td>
                            <td>
                                <a href="{{url('admin/interest', [$interest->id])}}/edit" class="btn btn-default">Edit</a>
                                <form action="{{url('admin/interest',[$interest->id])}}" method="POST" class="in-line" style="display: inline">
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