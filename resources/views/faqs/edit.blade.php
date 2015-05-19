@extends('app')

@section('title')
  Edit FAQ
@stop

@section('content')
  <div class="row">
    <h1>Edit FAQ Question</h1>
    <hr />
    <div class="col-sm-12 text-center">
    {!! Form::model($faq, ['route' => ['faqs.update', $faq->id], 'method' => 'patch']) !!}

    @include('faqs._form', ['submitButtonText' => 'Update FAQ'])  

    {!! Form::close() !!}
    </div>
  </div>
@stop
