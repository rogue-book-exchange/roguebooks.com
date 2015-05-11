@extends('app')

@section('title')
  FAQs
@stop

@section('content')
  @if ($block['top-header'])
    <h1>{{$block['top-header']}}</h1>
  @endif
@stop