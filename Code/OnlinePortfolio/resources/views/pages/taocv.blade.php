@include('includes.head')
<body>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@include('includes.header')
@include('includes.sidebar')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create recruitment</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST>
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Company</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" required autofocus>

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
                            <label for="job" class="col-md-4 control-label">Job</label>

                            <div class="col-md-6">
                                <input id="job" type="text" class="form-control" name="job" value="{{ old('job') }}" required>

                                @if ($errors->has('job'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount of employee</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control" name="email" value="" required max="500">

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!--TAG???? !-->TAG??
                        <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                            <label for="detail" class="col-md-4 control-label">Details</label>

                            <div class="col-md-6">
                                <textarea id="detail" name="deltail" rows="8" cols="80" class="form-control" required></textarea>

                                @if ($errors->has('detail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="img" class="col-md-4 control-label">image</label>

                            <div class="col-md-6">
                                <input id="img" type="file" class="form-control" name="img" value="" required>

                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="reset" name="btn">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')


</body>
</html>
