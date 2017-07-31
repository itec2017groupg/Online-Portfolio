@extends('adminside.layouts.defaultadminsite')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="form-group"><h1> UPDATE USER DATA   </h1></div>
        <form method="POST" action="/user/update&<?php echo $user->id ?>">

                <div width="100%" class="form-group required">
                  <div  class="col-md-6">Full Name :</div>
                  <div class="col-md-6"><input type="text" name="name" value="<?php echo $user->name ?>"></div>
                </div></br>
                <div width="100%" class="form-group required">
                  <div  class="col-md-6">ID real life :</div>
                  <div class="col-md-6"><input type="text" name="idlife" value="<?php echo $user->idlife ?>"></div>
                </label></br>
                <div width="100%" class="form-group required">
                  <div  class="col-md-6">Address :</div>
                  <div class="col-md-6"><input type="text" name="curaddress" value="<?php echo $user->curaddress ?>"></div>
                </div></br>
                <div width="100%" class="form-group required">
                  <div  class="col-md-6">Email :</div>
                  <div class="col-md-6"><input type="text" name="email" value="<?php echo $user->email ?>"></div>
                </div></br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="Update" value="update" class="btn btn-primary btn btn-info">
        </div>
      </div>
    </div>
  </div>

@endsection
