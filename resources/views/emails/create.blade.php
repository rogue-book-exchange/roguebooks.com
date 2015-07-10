@extends('app')

@section('title')
  Email Newsletter
@stop

@section('content')
  
  {!! Form::open(['route'=>'newsletter.send']) !!}
    {!! Form::textarea('message', null, ['placeholder'=>'Your Message']) !!}
    {!! Form::submit('Send') !!}
  {!! Form::close() !!}
@stop