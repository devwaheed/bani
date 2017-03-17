@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>DSR <a href="{{url('admin/dsr/create')}}" class="pull-right btn btn-primary">Ad DSR</a></h4>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($dsrs as $dsr)
                        <tr>
                            <td> {{ $dsr->id }}</td>
                            <td> <a href="{{url('admin/dsr', [$dsr->id])}}">{{ $dsr->form }}</a></td>
                            <td> <a href="{{url('admin/dsr', [$dsr->id])}}">{{ $dsr->to }}</a></td>
                            <td>
                                <a href="{{url('admin/dsr', [$dsr->id])}}/edit" class="btn btn-default">Edit</a>
                                <form action="{{url('admin/dsr',[$dsr->id])}}" method="POST" class="in-line" style="display: inline">
                                        {{ method_field('Delete') }}
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$dsr->id}}">
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