@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Add New Interest</h3>
            <form action="{{url('/admin/interest')}}" method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="from" class="form-control" placeholder="from" required>
                </div>
                <div class="form-group">
                    <input type="text" name="to" class="form-control" placeholder="to" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection