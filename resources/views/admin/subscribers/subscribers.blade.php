@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Subscribers <a href="{{url('admin/subscriber/create')}}" class="btn btn-primary pull-right">Add Subscriber</a></h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($subscriptions as $subscription)
                        <tr>
                            <td> {{ $subscription->id }}</td>
                            <td> <a href="{{url('admin/subscription', [$subscription->id])}}">{{ $subscription->email }}</a></td>
                            <td>
                                <a href="{{url('admin/subscription', [$subscription->id])}}/edit" class="btn btn-default">Edit</a>
                                <form action="{{url('admin/subscription',[$subscription->id])}}" method="POST" class="in-line" style="display: inline">
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