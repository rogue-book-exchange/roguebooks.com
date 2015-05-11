@extends('app')

@section('title')
  Login
@stop

@section('content')
  <!-- <div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
      {!! Form::inline() !!}
        {!! InputGroup::withContents(Form::text('username'))->prepend('Username') !!}
        <div class="hidden-md hidden-lg"><br /></div>
        {!! InputGroup::withContents(Form::password('password'))->prepend('Password') !!}
        <br />
        {!! Form::label('remember_token', 'Remember Me') !!}
        {!! Form::checkbox('remember_token') !!}
        <br />
        {!! Form::submit('Log In') !!}
      {!! Form::close() !!}
    </div>
  </div> -->
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="/auth/login">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label class="col-md-4 control-label">E-Mail Address</label>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                  <input type="password" class="form-control" name="password">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> Remember Me
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                    Login
                  </button>

                  <a href="/password/email">Forgot Your Password?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@stop