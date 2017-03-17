@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Add New DSR</h3>
            <form action="{{url('/admin/dsr')}}" method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="from" class="form-control" placeholder="from" required>
                </div>
                <div class="form-group">
                    <input type="text" name="to" class="form-control" placeholder="to" required>
                </div>
                <div class="from-group">
                    <select class="form-control" name="bank">
                        <option selected>Select Bank</option>
                        @foreach($banks as $bank)
                            <option value="{{$bank->id}}">{{$bank->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection