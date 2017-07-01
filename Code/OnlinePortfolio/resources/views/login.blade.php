<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="" action="{{url('login')}}" method="post" role="form">
            <legend>Login</legend>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="">
              @if($errors->has('email'))
                <p style="color:red">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
              @if($errors->has('password'))
                <p style="color:red">{{$errors->first('password')}}</p>
              @endif
            </div>
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-primary" name="button">Login</button>
          </form>
        </div>
      </div>

    </div>
  </body>
</html>
