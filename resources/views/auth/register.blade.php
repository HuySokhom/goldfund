@extends('layouts.app')

@section('content')

    <section class="focus" id="focus">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}


                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label for="first_name" class="col-md-4 control-label">First name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text"
                                               class="form-control" name="first_name"
                                               value="{{ old('first_name') }}" >

                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="last_name" class="col-md-4 control-label">Last name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text"
                                               class="form-control" name="last_name"
                                               value="{{ old('last_name') }}">

                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label for="gender" class="col-md-4 control-label">Gender</label>

                                    <div class="col-md-6">
                                        <select id="gender"
                                                class="form-control"
                                                name="gender">
                                            <option value="">Select</option>
                                            <option value="M" {{ old('gender') == 'M' ? 'selected' : ''}}>Male</option>
                                            <option value="F" {{ old('gender') == 'F' ? 'selected' : ''}}>Female</option>
                                        </select>

                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                    <label for="date_of_birth" class="col-md-4 control-label">date_of_birth</label>

                                    <div class="col-md-6">
                                        <input type="text" id="gender"
                                                class="form-control"
                                                name="date_of_birth"
                                                value="{{ old('date_of_birth') }}"/>

                                        @if ($errors->has('date_of_birth'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('date_of_birth') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username" class="col-md-4 control-label">Username</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control" name="username"
                                               value="{{ old('username') }}">

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

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
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('bitcoin_account') ? ' has-error' : '' }}">
                                    <label for="bitcoin_account" class="col-md-4 control-label">Bitcoin account</label>

                                    <div class="col-md-6">
                                        <input id="bitcoin_account" type="text" class="form-control"
                                               name="bitcoin_account"
                                               value="{{ old('bitcoin_account') }}">

                                        @if ($errors->has('bitcoin_account'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bitcoin_account') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('sponsor_id') ? ' has-error' : '' }}">
                                    <label for="sponsor_id" class="col-md-4 control-label">Sponsor</label>

                                    <div class="col-md-6">
                                        <input id="sponsor_id" type="text"
                                               class="form-control"
                                               name="sponsor_id"
                                               value="{{ old('sponsor_id') }}">
                                        @if ($errors->has('sponsor_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sponsor_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
                                    <label for="direction" class="col-md-4 control-label">Direction</label>

                                    <div class="col-md-6">
                                        <select id="direction"
                                                class="form-control"
                                                name="direction">
                                            <option value="">Select</option>
                                            <option value="L" {{ old('direction') == 'L' ? 'selected' : ''}}>Left</option>
                                            <option value="R" {{ old('direction') == 'R' ? 'selected' : ''}}>Right</option>
                                        </select>

                                        @if ($errors->has('direction'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('direction') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
