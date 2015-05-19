@extends('app')

@section('title')
  Add FAQ
@stop

@section('content')
  <div class="row">
    <h1>Add FAQ Question</h1>
    <hr />
    <div class="col-sm-12 text-center">
    {!! Form::open(['url'=>'faqs']) !!}

    @include('faqs._form', ['submitButtonText' => 'Add FAQ'])

    {!! Form::close() !!}
    </div>
  </div>
@stop
