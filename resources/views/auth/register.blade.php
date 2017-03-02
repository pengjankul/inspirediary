@extends('auth.templatelogin')
@section('content')
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback">
      <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Password" name="password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
 
    </div>

    <div class="col-xs-8"> </div>
    <div class="col-xs-4">
      <button type="submit" class="btn btn-primary btn-block btn-flat">register</button>
    </div>
</form>
@stop
