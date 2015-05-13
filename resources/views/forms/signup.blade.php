@extends('app')

@section('title')
  Volunteer Signup
@stop

@section('content')
  {!! Form::open() !!}
  {!! Form::text('first_name', $volunteer->first_name) !!}
  {!! Form::text('last_name', $volunteer->last_name) !!}
  {!! Form::text('email', $volunteer->email) !!}
  {!! Form::text('phone', $volunteer->phone) !!}
  {!! Form::text('password', bcrypt($volunteer->password)) !!}
  {!! Form::close() !!}
@stop