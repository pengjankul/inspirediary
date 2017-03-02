<!-- resources/views/auth/login.blade.php -->
@extends('auth.templatelogin')
@section('content')
<h1 class="text-light">Login to Admin</h1>
<hr class="thin">
<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    
</p>
    <form action="/auth/login" method="post">
         {!! csrf_field() !!}
      <div class="input-control text  full-size">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="input-control password  full-size">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class = " fixe-grid">
        <div class="row">
          <div class="cell ">
            <div class="checkbox icheck">
              <label class="input-control checkbox">
                <input type="checkbox" checked>
                <span class="check"></span>
                <span class="caption">Rememder</span>
              </label>
            </div>
          </div>
          </div>
      </div>
        <div class="grid ">
        <div class = "row "></div>
        <div class="row cells3">
            <div class = "cell"></div>
            <div class ="cell"><button type="submit" class="button info block-shadow-info text-shadow">Sign In</button></div>
             <div class = "cell"></div>
        </div>
      </div>
    </form>

@stop