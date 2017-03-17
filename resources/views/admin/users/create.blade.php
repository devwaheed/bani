@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Add New User</h2>
            <form action="{{url('/admin/user')}}" method="POST" >
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="name@mail.com" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="1565" required>
                </div>
                <div class="form-group">
                    <input type="text" name="company" class="form-control" placeholder="Company name" required>
                </div>
                <div class="form-group">
                    <select name="role" class="form-control">
                        <option>Select Role</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection