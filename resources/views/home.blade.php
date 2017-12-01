@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>
                        @foreach($currentUser as $key => $data)
                            Number of pay attempt: {{$data->count}}
                        @endforeach

                    </h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                        @foreach($userData as $key => $data)
                            <tr>
                                <th>{{$data->id}}</th>
                                <th>{{$data->name}}</th>
                                <th>{{$data->email}}</th>
                                <th>{{$data->phone}}</th>
                                <th>{{$data->created_at}}</th>
                                <th>{{$data->updated_at}}</th> 
                            </tr>
                        @endforeach

                        </tbody>
                    </table>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


