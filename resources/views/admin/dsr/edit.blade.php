@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Update DSR</h2>
            <form action="{{url('admin/dsr', [$dsr->id])}}" method="POST" >
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$dsr->id}}">
                <div class="form-group">
                    <input type="text" name="from" class="form-control" placeholder="from" value="{{$dsr->form}}">
                </div>
                <div class="form-group">
                    <input type="text" name="to" class="form-control" placeholder="to" value="{{$dsr->to}}">
                </div>
                <div class="form-group">
                   <select class="form-control" name="bank">
                        @foreach($banks as $bank)
                            <option value="{{$bank->id}}" 
                                @if($bank->id == $dsr->bank_id) selected @endif>{{$bank->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection