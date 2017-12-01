@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <input type="hidden" id="count" name="count" value="0">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <button
                                id="registerButton"
                                type="button" 
                                class="btn btn-primary btn-lg" 
                                data-toggle="modal" 
                                data-target="#paymentModal"                               
                                >
                                    Register
                                </button>
                            </div>
                        </div>                       

                        <div class="modal fade" id="paymentModal" 
                        tabindex="-1" role="dialog" 
                        aria-labelledby="favoritesModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" 
                                    data-dismiss="modal" 
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" 
                                    id="favoritesModalLabel">Confirm Payment</h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                    Please confirm you would like to pay                                
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" 
                                    class="btn btn-default" 
                                    data-dismiss="modal">Close</button>
                                    <span class="pull-right">
                                    <button type="submit" class="btn btn-primary">
                                        Pay
                                    </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#registerButton').click(function() {
            var value = parseInt($('#count').val()) + 1;           
            document.getElementById('count').value = value.toString();
        });
    });
</script>
@endsection
