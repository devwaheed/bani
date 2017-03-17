@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Update Subscriber Email</h3>
            <form action="{{url('admin/subscription', [$subscriber->id])}}" method="POST" >
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{$subscriber->email}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection