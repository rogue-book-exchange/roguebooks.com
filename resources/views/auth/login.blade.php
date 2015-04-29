@extends('app')

@section('title')
  Login
@stop

@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
      {!! Form::inline() !!}
        {!! InputGroup::withContents(Form::text('username'))->prepend('Username') !!}
        <div class="hidden-md hidden-lg"><br /></div>
        {!! InputGroup::withContents(Form::password('password'))->prepend('Password') !!}
        <div><br /></div>
        <!-- {!! Form::checkbox('rememberMe', 'Remember Me') !!} -->
        <!-- Rememeber Me<input type="checkbox" name="Remeber Me" value="RembmerMe"> -->
      {!! Form::close() !!}
    </div>
  </div>
@stop