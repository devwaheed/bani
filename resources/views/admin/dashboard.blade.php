@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h4>Users</h4>
            
            <div class="table-responsive">
                 <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Company</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Waheed Ahmad</td>
                        <td>Freelancer</td>
                    </tr>
                </table>
            </div>
            <a href="" class="btn btn-default pull-right">see all</a>
        </div><!-- users -->
        <div class="col-md-6">
            <h4>Subscribers</h4>
            
            <div class="table-responsive">
                 <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>jkahmadjk@live.com</td>
                    </tr>
                </table>
            </div>
            <a href="" class="btn btn-default pull-right">see all</a>
        </div><!-- subscribers -->
    </div><!--row -->

@endsection