@extends('app')

@section('title')
  Add Support Block
@stop

@section('content')
  <div class="row">
    <h1>Add Support Block</h1>
    <hr />
    <div class="col-sm-12 text-center">
    {!! Form::open(['url'=>'faqs']) !!}

    @include('faqs._form', ['submitButtonText' => 'Add FAQ'])

    {!! Form::close() !!}
    </div>
  </div>
@stop
