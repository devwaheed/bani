@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Banks <a href="{{url('admin/bank/create')}}" class="btn btn-primary pull-right">Add Bank</a></h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($banks as $bank)
                        <tr>
                            <td> {{ $bank->id }}</td>
                            <td> <a href="{{url('admin/bank', [$bank->id])}}">{{ $bank->name }}</a></td>
                            <td>
                                <a href="{{url('admin/bank', [$bank->id])}}/edit" class="btn btn-default">Edit</a>
                                <form action="{{url('admin/bank',[$bank->id])}}" method="POST" class="in-line" style="display: inline">
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