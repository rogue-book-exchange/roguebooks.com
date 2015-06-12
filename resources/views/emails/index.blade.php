@extends('app')
@section('title')
  Subscription Settings
@stop

@section('content')
  {!! Form::open(['route' => ['emails.destroy'], 'method' => 'delete', 'id'=>'destroy']) !!}
    {!! Form::email('email', null, ['placeholder'=>'your email']) !!}
    {!! Form::submit('Unsubscribe') !!}
  {!! Form::close() !!}
@stop