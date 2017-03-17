@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Update Bank</h2>
            <form action="{{url('admin/bank', [$bank->id])}}" method="POST" >
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Bank name" value="{{$bank->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection