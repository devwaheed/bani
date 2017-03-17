@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Update User</h2>
            <form action="{{url('admin/user', [$user->id])}}" method="POST" >
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="full name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="name@mail.com" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password" value="{{$user->password}}">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{$user->phone}}">
                </div>
                <div class="form-group">
                    <input type="text" name="company" class="form-control" placeholder="company" value="{{$user->company}}">
                </div>

                <div class="form-group">
                   <select class="form-control" name="role">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" 
                                @if($role->id == $user->role_id) selected @endif>{{$role->role}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection