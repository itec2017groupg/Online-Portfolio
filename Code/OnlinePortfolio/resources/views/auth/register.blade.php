@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
<<<<<<< HEAD
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
=======
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
>>>>>>> 487b66f200275c3fb3b5e1928b50905154e62f57
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

<<<<<<< HEAD
=======
                        <div class="form-group{{ $errors->has('ava') ? ' has-error' : '' }}">
                            <label for="ava" class="col-md-4 control-label">Avatar</label>

                            <div class="col-md-6">
                                <input id="ava" type="file" class="form-control" name="ava" value="" required>

                                @if ($errors->has('ava'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ava') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

>>>>>>> 487b66f200275c3fb3b5e1928b50905154e62f57
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

<<<<<<< HEAD
=======
                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Day of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob"  value="{{old('dob')}}"required>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('add') ? ' has-error' : '' }}">
                            <label for="add" class="col-md-4 control-label">Home address</label>

                            <div class="col-md-6">
                                <input id="add" type="text" class="form-control" name="add" value="{{ old('add') }}" required>

                                @if ($errors->has('add'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('add') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="col-md-4 control-label">Company</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" required>

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input type="radio" name="gender" value="male" checked> Male<br>
                                <input type="radio" name="gender" value="female"> Female<br>
                                <input type="radio" name="gender" value="other"> Other <br>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                            <label for="telp" class="col-md-4 control-label">Mobile Phone</label>

                            <div class="col-md-6">
                                <input id="telp" type="number" class="form-control" name="telp" value="{{ old('telp') }}" required>

                                @if ($errors->has('telp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">
                            <label for="degree" class="col-md-4 control-label">Degree</label>

                            <div class="col-md-6">

                                <input id="degree" type="file" class="form-control" name="degree" value="">
                                @if ($errors->has('degree'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('other') ? ' has-error' : '' }}">
                            <label for="other" class="col-md-4 control-label">Other Information</label>

                            <div class="col-md-6">
                                <input id="other" type="text" class="form-control" name="other" value="{{ old('other') }}" required autofocus>

                                @if ($errors->has('other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('other') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
>>>>>>> 487b66f200275c3fb3b5e1928b50905154e62f57
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
<<<<<<< HEAD
=======
                                <button type="reset" name="btn">Reset</button>
>>>>>>> 487b66f200275c3fb3b5e1928b50905154e62f57
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
