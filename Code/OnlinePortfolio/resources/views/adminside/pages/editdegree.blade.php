@extends('adminside.layouts.defaultadminsite')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="form-group"><h1> UPDATE DEGREE  </h1></div>
        <form method="POST" action="/degree/update&<?php echo $degree->id ?>">

                <div width="100%" class="form-group required">
                  <div  class="col-md-6">Degree name</div>
                  <div class="col-md-6"><input type="text" name="name" value="<?php echo $degree->name ?>"></div>
                </div></br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="Update" value="update" class="btn btn-primary btn btn-info">
        </div>
      </div>
    </div>
  </div>

@endsection
