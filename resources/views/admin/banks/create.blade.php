@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Add New Bank</h3>
            <form action="{{url('/admin/bank')}}" method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Bank name">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection