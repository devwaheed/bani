@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Add New Subscriber</h3>
            <form action="{{url('/admin/subscription')}}" method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="name@mail.com" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection